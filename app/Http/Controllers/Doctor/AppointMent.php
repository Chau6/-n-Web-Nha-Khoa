<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreUpdateDatLich;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointMent extends Controller
{
    public function index(){
        $result = DB::table('dat_lich')->get();
        return view('doctor.appointment.index', ['dat_lich' => $result]);
    }
    public function edit($id){
        $edit = DB::table('dat_lich')->where('id', $id)->first();
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('doctor.appointment.edit',['edit'=>$edit,'doctors' => $doctor,]);
    }
    public function update(StoreUpdateDatLich $request, $id){
        $data = $request->except('_token');
        DB::table('dat_lich')->where('id',$id)->update($data);
        return redirect()->route('doctor.appointment.index')->with('success','Edit Successfully');
    }
    public function delete($id){
        DB::table('dat_lich')->where('id',$id)->delete();
        return redirect()->route('doctor.appointment.index');
    }
}
