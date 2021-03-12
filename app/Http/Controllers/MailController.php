<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $user_id = User::where('remember_token', $code)->first()->id;
        return response()->view('admin/confirmPassword', ['id' => $user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'password_new' => 'required|string|min:4|same:password_confirmation',
        ];

        $this->validate($request, $rules);
        $user = User::find($id);
        $password = $user->password;
        $checkPassword = Hash::check($request->password,$password);
        if ($checkPassword){
            $user -> update([
                'password' => Hash::make($request->password_new),
                'status' => 1,
                'email_verified_at' => now(),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
           Auth::login($user);
            return redirect('admin')->
            with(['message' => 'your password has been changed']);
        }
        return redirect()->back()->with(['message'=>'Your password was incorrect']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
