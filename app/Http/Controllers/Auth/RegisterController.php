<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'namadepan' => ['required', 'string', 'max:255'],
            'namabelakang' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        dd($data);
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'namadepan' => $data['namadepan'],
            'namabelakang' => $data['namabelakang']
        ]);
    }

    public function registrationForm()
    {
        return view('auth.register');
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
