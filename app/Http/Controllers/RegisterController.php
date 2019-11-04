<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{
    public function registrationForm()
    {
        return view('register');
    }

    /* POST
    */
    public function registerUser(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'email' => ['required|string|email|max:255|unique:users'],
            'password' => ['required|string|min:8|confirmed'],
            'namadepan' => ['required|string|max:255'],
            'namabelakang' => ['required|string|max:255'],
        ]);

        if( $validate->fails()){
            return redirect()
                ->back()
                ->withErrors($validate);
        }

        $user_create = \App\User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'namadepan' => $request->namadepan,
            'namabelakang' => $request->namabelakang
        ]);

        return redirect('/register')->with('success', 'Successfully registered');
    }
}
