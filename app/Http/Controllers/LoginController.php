<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use App\Http\MessageContent;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view('authen.login');
    }

    public function viewRegister()
    {
        return view('authen.register');
    }

    function register(Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
            if ($data['password'] == $data['password_confirmation']) {
                $user = new User();
                $user->name = $data['username'];
                $user->email = $data['email'];
                $user->gender = $data['gender'];
                $user->address = $data['address'];
                $user->password = Hash::make($data['password']);
                $user->role_id = User::USER;
                $user->save();
                $message = MessageContent::getMessage('register_success');
                return redirect()->route('view_login')->with('success', $message);
            } else {
                $message = MessageContent::getMessage('register_failed');
                return redirect()->route('view_register')->with('failed', $message);
            }
        } catch (Exception $e) {
            $message = MessageContent::getMessage('register_failed');
            return redirect()->route('view_register')->with('failed', $message);
        }
    }
    function login(Request $request)
    {
        MessageContent::loadMessages();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            if ($user->role_id == User::ADMIN || $user->role_id == User::SYSTEM) {
                $message = MessageContent::getMessage('login_success');
                return redirect()->route('admin.dashboard')->with('success', $message);
            } else {
                $message = MessageContent::getMessage('login_success');
                return redirect()->route('user.list_post_social')->with('success', $message);
            }
        } else {
            $message = MessageContent::getMessage('login_failed');
            return redirect()->route('view_login')->with('failed', $message);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('view_login');
    }
}
