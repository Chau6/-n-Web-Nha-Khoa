<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getcontact(){
        return view('client.pages.contact');
    }

    public function postcontact(Request $request){
        $customer = DB::table('user')->where('email',$request->email)->first();
        Mail::send('email.check_mail_forget', compact('customer'), function($email) use($customer){
            $email->subject('Belleville | Feedback');
            $email->to($customer->email,$customer->last_name);
        });
        return redirect()->route('client.pages.contact')->with('success', 'Check Your Mail');
    }
}
