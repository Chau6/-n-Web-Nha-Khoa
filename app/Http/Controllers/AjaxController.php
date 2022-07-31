<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Category\StoreUpdateCategory;
use App\Http\Requests\Category\StoreCategory;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function ajax(){
        return view('client.pages.appointment_create');
    }
    public function get_data_ajax(Request $request){
        $value_date = $request->get('value_date');
        $id_doctor = $request->get('id_doctor');

        $result = DB::table('doctor_day_work')->where('doctor_id',$id_doctor)->where('date',$value_date)->get();
        $datas = DB::table('booking')->where('date',$value_date)->get();
        $xhtml = '';

        foreach ($result as $item) {
            foreach ($datas as $data){
                if($data->doctor_name == $item->doctor_id){ //doctor = doctor
                    if($data->time != $item->time){
                        $xhtml = '<option value="' . $item->time . '">' . $item->time . '</option>';
                        break;
                    }
                }
            }
            if(!isset($data) && $item->date == $value_date){
                $xhtml .= '<option value="' . $item->time . '">' . $item->time . '</option>';
            }
        }
        return $xhtml;
    }
}
