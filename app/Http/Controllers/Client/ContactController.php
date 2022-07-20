<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Contact\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getcontact(){
        if(Auth::check()){
            $data_contact = DB::table('user')->where('email', Auth::user()->email)->first();
            // dd($data_contact);
            return view('client.pages.contact', ['customer'=>$data_contact]);
        }
        return view('client.pages.contact');
    }

    public function postcontact(ContactRequest $request){
        $data_contact = $request->except('_token');
        $data_contact['created_at'] = new \DateTime;
        
        Mail::send('email.mail_contact', $data_contact, function($email) use($request){
            $email->subject('Belleville | Feedback');
            $email->to($request->email);
        });
        DB::table('contact')->insert($data_contact);
        return redirect()->route('client.pages.contact')->with('success', 'Check Your Mail');
    }
}
