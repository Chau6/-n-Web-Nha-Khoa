<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

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
 
        return redirect()->back();
    }

    public function send_mail_pass(){
        return view('email.send_mail_pass');
    }

    public function post_send_mail_pass(CheckMail $request){
        $customer = DB::table('user')->where('email',$request->email)->first();
        Mail::send('email.check_mail_forget', compact('customer'), function($email) use($customer){
            $email->subject('Belleville | Recover Password');
            $email->to($customer->email,$customer->last_name);
        });
        return redirect()->route('getLoginClient')->with('success', 'Check Your Mail');
    }

    public function GetResetPass($id){
        $customer = DB::table('user')->where('id', $id)->first();
        return view('client.reset_password', ['customer' => $customer]);
    }

    public function PostResetPass(ResetPasswordRequest $request, $id){
        $password = bcrypt($request->password);
        DB::table('user')->where('id',$id)->update(['password'=>$password]);
        return redirect()->route('getLoginClient')->with('success', 'Change password successfully');
    }
}
