<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function userlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Invalid Credentials!");
    }

    public function usersignup(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'gender' => 'required',
            'dob' => 'required'
        ]);

        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['gender'] = $request->gender;
        $data['dob'] = $request->dob;

        $user = User::create($data);

        if(!$user){
            return redirect(route('signup'))->with("error", "User Details Invalid!");
        }
        return redirect(route('login'))->with("success", "Account Created Successfully!");
    }

    public function signup(){
        return view('signup');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }
}
