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
        $data = DB::table('dat_lich')->where('user_id',Auth::user()->id)->get();
        
        return view('client.pages.appointment_index', ['datas' => $data, 'user' => $user_result]);
    }
    public function delete($id){
        DB::table('dat_lich')->where('id',$id)->delete();
        return redirect()->route('client.pages.appointment_index');
    }
    public function appointment_create(){
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('client.pages.appointment_create', ['doctors' => $doctor], );
    }
    public function store(StoreDatLich $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $data['user_id'] = Auth::user()->id;

        DB::table('dat_lich')->insert($data);

        return redirect()->route('client.pages.appointment_index')->with('success','Insert Successfully');
    }
    public function appointment_edit($id){
        $edit = DB::table('dat_lich')->where('id','=', $id)->first();
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('client.pages.appointment_edit', ['id' => $id, 'doctors' => $doctor, 'edit' => $edit]);
    }
    public function update(StoreUpdateDatLich $request, $id){
        $data = $request->except('_token'); //lấy data ngoại trừ

        DB::table('dat_lich')->where('id','=', $id)->update($data); //rỗng thì giữ nguyên
        
        return redirect()->route('client.pages.appointment_index')->with('success','Edit Successfully') ; //trả về đường dẫn;
    }
}
