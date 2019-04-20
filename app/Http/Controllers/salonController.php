<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class salonController extends Controller
{
    public function selectSalon(Request $request)
    {
        $userList = DB::table('wor_info_tab')
            ->get();
        return view('salon.SalunSelect',['data'=>$userList]);
    }

    public function SalonDetails(Request $request, $id){

        $spList = DB::table('wor_list_tab')
        ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','time_taken','price')
        ->where('wor_price_list.wor_info_id',$id)
        ->distinct()
        ->get();
        
        return view('salon.select_time',['data'=>$spList]);
        
    }
}
