<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Doctor\StoreDatLich;
use Illuminate\Support\Facades\DB;

class DatLichController extends Controller
{
    public function appointment(){
        $doctor = DB::table('doctors')->orderBy('id')->get();
        return view('client.pages.appointment', ['doctors' => $doctor], );
    }
    // public function store(Request $request){
    //     $data = $request->except('_token');
    //     $data['created_at'] = new \DateTime();
    //     DB::table('doctor_day_work')->insert($data);
    //     return redirect()->route('admin.doctor_time.index')->with('success','Insert Successfully');
    // }

    // public function delete($id){
    //     DB::table('doctor_day_work')->where('id',$id)->delete();
    //     return redirect()->route('admin.doctor_time.index');
    // }
}
