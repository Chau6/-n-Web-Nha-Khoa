<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegisterRequest;

class Register_ClientController extends Controller
{
    public function getRegisterClient(){
        return view('client.register_client');
    }
    public function postRegisterClient(Request $request){
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();
        $data['level'] = 0;

        DB::table('user')->insert($data);
        return redirect()->route('getLoginClient')->with('success','Register Success');
    }
}
