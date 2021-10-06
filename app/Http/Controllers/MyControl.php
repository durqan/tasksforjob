<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MyControl extends Controller
{
    public function index()
    {
        $authorizate = 0;

        if (Auth::check()) {
            $authorizate = 1;
        }

        return view('index', ['authorizate' => $authorizate]);
    }

    public function personal_page()
    {
        if (Auth::check()) {

            $user = users::get()->where('id', Auth::id())->first();

            return view('personal_page', ['auth_user' => $user]);
        }
    }

    public function sign_up()
    {
        return view('registration');
    }

    public function posts()
    {
        if (Auth::check()) {

            $user = users::get()->where('id', Auth::id())->first();

            return view('posts', ['user' => $user]);
        }
    }

    public function post_add()
    {

        $users = users::has('authorizate_users')->where('id', '!=', Auth::id())->get();

        return view('post_add', ['users' => $users]);
    }

    public function authorizate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember = true)) {

            $request->session()->regenerate();

            return redirect()->intended('/personal_page');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registrate(Request $request)
    {
        $hashed = Hash::make($request['password']);

        $user = new users();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = $hashed;
        $user->subscribe = $request['subscribe'];
        $user->save();
    }
}
