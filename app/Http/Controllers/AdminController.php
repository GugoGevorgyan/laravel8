<?php

namespace App\Http\Controllers;

use App\Mail\AdminShop;
use App\Models\User;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role_id !== 1) {
            return redirect('admin')->
            with(['message' => 'you are not an SuperAdmin']);
        }
        return response()->view('admin/creatAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|alpha',
            'email' => 'sometimes|required|email|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $this->validate($request, $rules, $customMessages);

        $code = Str::random(10) . time();

        $toEmail = $this->send($code, $request['email'], $request['password']);
        if ($toEmail === "true") {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'role_id' => 2,
                'remember_token' => $code,
            ]);

            return redirect('admin/profile-admins')->with(['message' => 'The admin successfully created']);
        }
        return redirect('admin')
            ->with(['message' => $toEmail->getMessage()]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = User::all()->where('role_id', 2);
        return response()->view('admin/profile-admins',['admins'=>$admins]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return response()->view('admin/edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id() != $id){
            return redirect('admin');
        };
        $rules = [
            'name' => 'required|string|alpha',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $this->validate($request, $rules, $customMessages);
        User::find($id) ->update([
            'name'=> $request->name,
        ]);
            return redirect('admin')->
            with(['message' => 'your data has been successfully changed']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }

    public function login()
    {
//        return response()->view('admin/login');
        return response()->view('admin/sign-in-cover');
    }

    public function send($code, $email, $password)
    {
        try {
            Mail::to($email)->send(new AdminShop($code, $password));

        } catch (\Exception $err) {
            return $err;
        }
        return 'true';
    }

    public function status(Request $request, $id){
        $status = User::find($id)->status === '1' ? 0 : 1;
        User::find($id)->update([
            'status' => $status,
        ]);
        return redirect('admin/'.Auth::id());
    }

    public function update_password(Request $request, $id){
        $rules = [
            '_token' => 'required',
            'password_new' => 'required|string|min:5|same:password_confirmation',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];

        $this->validate($request, $rules, $customMessages);

        $checkPassword = Hash::check($request->password,Auth::user()->password);
        if ($checkPassword){
            Auth::user() -> update([
                'password' => Hash::make($request->password_new),
            ]);
            return redirect('admin')->
            with(['message' => 'your password has been changed']);
        }

        return redirect()->back()->with(['message'=>'Your password was incorrect']);
    }

}
