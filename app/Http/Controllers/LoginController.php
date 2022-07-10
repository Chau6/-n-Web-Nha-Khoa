<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('admin.user.index');
        }
        return view('login');
    }

    public function postLogin(LoginRequest $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'email'=>['required', 'email'],
            'password' => ['required'],
        ]);
    
        // $credentials['level'] = 1;
        // $credentials['level'] = 2;
    
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.user.index');
        }
        return redirect()->route('getLogin');
    }

    public function getLogout(Request $request){
        Auth::logout();
 
        return redirect()->route('getLogin');
    }

    public function testMail(){
        $name = "Tin";
        Mail::send('email.test', compact('name'), function($email) use($name){
            $email->subject('Demo test mail');
            $email->to('khuunhattin123@gmail.com', $name);
        });
        return redirect()->route('getLogin')->with('success', 'Email has been sent');
    }

    public function reset_password(){
        return view('email.reset_password');
    }

    public function post_reset_password(){
        
    }
}
