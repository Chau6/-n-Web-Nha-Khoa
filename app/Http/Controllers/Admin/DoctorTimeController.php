<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Doctor\StoreDoctorTime;
use App\Http\Requests\Doctor\StoreUpdateDoctorTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorTimeController extends Controller
{
    public function index(){
        $data = DB::table('doctor_day_work')->orderBy('created_at')->get();
        return view('admin.doctor_time.index', ['doctor_day_work' => $data]);
    }
    public function create(){
        $doctor = DB::table('doctors')->orderBy('id')->get();
        $doctor_day_work = DB::table('doctor_day_work')->orderBy('id')->get();
        return view('admin.doctor_time.create', ['doctors' => $doctor], ['doctor_day_work' => $doctor_day_work]);
    }
    public function store(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('doctor_day_work')->insert($data);
        return redirect()->route('admin.doctor_time.index')->with('success','Insert Successfully');
    }
    public function edit($id){
        $doctor = DB::table('doctors')->orderBy('id')->get();
        $doctor_day_work = DB::table('doctor_day_work')->where('id', $id)->first();
        return view('admin.doctor_time.edit', ['doctors' => $doctor], ['doctor_day_work' => $doctor_day_work]);
    }
    public function update(Request $request, $id){
        $data = $request->except('_token');
        DB::table('doctor_day_work')->where('id',$id)->update($data);
        return redirect()->route('admin.doctor_time.index')->with('success','Edit Successfully');
    }
    public function delete($id){
        DB::table('doctor_day_work')->where('id',$id)->delete();
        return redirect()->route('admin.doctor_time.index');
    }
}
