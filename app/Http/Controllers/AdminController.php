<?php

namespace App\Http\Controllers;

use App\Mail\AdminShop;
use App\Models\User;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return response()->view('admin/superAdmin');
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
            'email' => 'sometimes|required|email',
            'password' => 'required|string|min:4|confirmed',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $this->validate($request, $rules, $customMessages);

        $code = Str::random(10) . time();

        $toEmail = $this->send($code, $request['email'],$request['password'] );
if ($toEmail === "true"){
    User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'role_id' => 2,
        'status' => $code,
    ]);
    return redirect('admin')
        ->with(['message' => 'The admin successfully created']);
}
        return redirect('admin')
            ->with(['message' => $toEmail]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
//        dd('login');
        return response()->view('admin/login');
    }

    public function send($code, $email,$parole)
    {
        try {
            Mail::to($email)->send(new AdminShop($code, $parole));

        } catch (\Exception $err) {
            return $err;
        }
        return 'true';
    }

    public function verify(Request $request)
    {
        DB::table('users')->where('status', $request->code)->update(['status' => 1]);
        return response()->view('admin/confirmPassword');
    }
}
