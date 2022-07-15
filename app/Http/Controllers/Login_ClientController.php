<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class Login_ClientController extends Controller
{
    public function getLoginClient(){
        if(Auth::check()){
            return redirect()->route('client.pages.index');
        }
        return view('client.login_client');
    }

    public function postLoginClient(LoginRequest $request){
        $credentials = $request->validate([
            'email'=>['required', 'email'],
            'password' => ['required'],
        ]);

        // $credentials["level"] = 0;
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->level == 1){
                return redirect()->route('admin.index_pages');
            }else{
                return redirect()->route('client.pages.index');
            }
        } 
        return redirect()->route('getLoginClient')->with('error','Account Not Esist');

    }

    public function getLogoutClient(Request $request){
        Auth::logout();
 
        return redirect()->route('client.pages.index');
    }
}
