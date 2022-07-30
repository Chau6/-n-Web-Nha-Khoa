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
        $id_doctor = $request->get('id_doctor');
        $result = DB::table('doctor_day_work')->where('doctor_id',$id_doctor)->get();
        $xhtml = '';
        foreach ($result as $item) {
            $xhtml .= '<option value="' . $item->doctor_id . '">' . $item->time .'</option>';
        };
        return $xhtml;
        
    }
}
