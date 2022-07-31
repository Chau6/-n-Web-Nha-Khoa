<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Doctor\StoreDatLich;
use App\Http\Requests\Doctor\StoreUpdateDatLich;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DatLichController extends Controller
{
    public function appointment_index(){
        $user_result = DB::table('user')->where('id',Auth::user()->id)->first();
        $data = DB::table('booking')->where('user_id',Auth::user()->id)->get();
        
        return view('client.pages.appointment_index', ['datas' => $data, 'user' => $user_result]);
    }
    public function delete($id){
        DB::table('booking')->where('id',$id)->delete();
        return redirect()->route('client.pages.appointment_index');
    }
    public function appointment_create(){
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('client.pages.appointment_create', ['doctors' => $doctor], );
    }
    public function store(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $data['user_id'] = Auth::user()->id;
        $data['status'] = "Make an appointment";
        $data['medical_history'] = "null";

        DB::table('booking')->insert($data);

        return redirect()->route('client.pages.appointment_index')->with('success','Insert Successfully');
    }
    public function appointment_edit($id){
        $edit = DB::table('booking')->where('id','=', $id)->first();
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('client.pages.appointment_edit', ['id' => $id, 'doctors' => $doctor, 'edit' => $edit]);
    }
    public function update(Request $request, $id){
        $data = $request->except('_token'); //lấy data ngoại trừ

        DB::table('booking')->where('id','=', $id)->update($data); //rỗng thì giữ nguyên
        
        return redirect()->route('client.pages.appointment_index')->with('success','Edit Successfully') ; //trả về đường dẫn;
    }
}
