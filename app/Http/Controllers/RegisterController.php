<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('register');
    }
    public function postRegister(Request $request){
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();

        DB::table('user')->insert($data);
        return redirect()->route('getLogin');
    }
}
