<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('admin.user.index');
        }
        return view('login');
    }

    public function postLogin(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'email'=>['required', 'email'],
            'password' => ['required'],
        ]);
    
        // $credentials['level'] = 1 || $credentials['level'] = 2;
        // $credentials['level'] = 2;
 
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.user.index');
        }
        return redirect()->route('getLogin');
    }

    public function logout(Request $request){
        Auth::logout();
 
        return redirect()->route('getLogin');
    }
}
