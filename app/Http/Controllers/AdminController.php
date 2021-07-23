<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAdminRequest;
use App\Mail\AdminShop;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        if (!Gate::allows('isSuperAdmin')) {
            return redirect('admin/adminDashboard');
        }

        $admins = User::all()->where('role_id', 2);
        return response()->view('admin/profile-admins',['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('isSuperAdmin')) {
            return response()->view('admin/creatAdmin');
        } else {
            return redirect()->back()->
            with(['message' => 'you are not an SuperAdmin']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(UserAdminRequest $request)
    {
        $code = Str::random(10) . time();

        $toEmail = $this->send($code, $request['email'], $request['password']);
        if ($toEmail === "ok") {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'role_id' => 2,
                'remember_token' => $code,
            ]);

            return redirect('admin')
                ->with(['message' => 'The admin successfully created']);
        }
        return redirect()->back()
            ->with(['message' => $toEmail->getMessage()]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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

        $this->validate($request, $rules);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if (Gate::allows('isSuperAdmin') && $id !== '1' ) {
            $name = User::find($id)->name;
            User::destroy($id);
            return redirect()->back()->with(['message'=>'you have successfully removed '. $name.' from admin']);
        } else {
            return redirect()->back()->with(['message'=>'Oops, something went wrong']);
        }

    }

    public function login()
    {
        return response()->view('admin/sign-in-cover');
    }

    public function send($code, $email, $password)
    {
        try {
            Mail::to($email)->send(new AdminShop($code, $password));
        } catch (\Exception $err) {
            return $err;
        }
        return 'ok';
    }

    public function status(Request $request, $id){

        if (Gate::allows('isSuperAdmin') && $id !== '1' ) {
            $status = User::find($id)->status === '1' ? 0 : 1;
            User::find($id)->update([
                'status' => $status,
            ]);
            return redirect('admin')
                ->with(['message' => 'The admin successfully update status']);
        } else {
            return redirect()->back()->with(['message'=>'Oops, something went wrong']);
        }

    }

    public function update_password(Request $request, $id){
        $rules = [
            '_token' => 'required',
            'password_new' => 'required|string|min:5|same:password_confirmation',
        ];

        $this->validate($request, $rules);

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
