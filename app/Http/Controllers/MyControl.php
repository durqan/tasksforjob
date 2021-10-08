<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\sections;
use App\Models\messages;

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

            $user = users::where('id', Auth::id())->first();

            $auth_check = users::has('authorizate_users')->where('id', '=', Auth::id())->first();

            return view('personal_page', ['auth_user' => $user, 'auth_check' => $auth_check]);
        }
    }

    public function sign_up()
    {
        return view('registration');
    }

    public function message($id)
    {
        $message = messages::find($id)->with('sender')->first();

        $message->viewed = 1;

        $message->save();

        return view('message', ['message' => $message]);
    }

    public function send_message(Request $request)
    {
        $message = new messages();
        $message->head = $request['head'];
        $message->body = $request['body'];
        $message->sender_id = Auth::id();
        $message->section_id = $request['section'];
        $message->recipient_id = $request['recipient_id'];
        $message->save();
    }

    public function posts()
    {
        $read = messages::where('recipient_id', '=', Auth::id())->where('viewed', '=', 1)->with('section')->get();
        $unread = messages::where('recipient_id', '=', Auth::id())->where('viewed', '=', 0)->with('section')->get();

        return view('posts', ['read' => $read, 'unread' => $unread]);
    }

    public function post_add()
    {

        $users = users::has('authorizate_users')->where('id', '!=', Auth::id())->get();

        $sections = sections::get();

        return view('post_add', ['users' => $users, 'sections' => $sections]);
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
