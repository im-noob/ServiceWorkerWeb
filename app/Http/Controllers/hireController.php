<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hireController extends Controller
{
    public function hirePage($id){
        echo $id;
        $spList = DB::table('wor_info_tab')
            ->join('wor_rate_tab','wor_rate_tab.wor_info_id','=','wor_info_tab.wor_info_id')
            ->select('name','work_exp','work_hour','no_of_work','rating','pic','wor_info_tab.wor_info_id')
            ->where('wor_subcat_id',$id)
            ->get();

        $List = DB::table('wor_info_tab')
            ->join('wor_rate_tab','wor_rate_tab.wor_info_id','=','wor_info_tab.wor_info_id')
            ->select('name','state','city','pin_code','address','location','no_of_profile_view','wor_rate_tab.*')
            ->where('wor_subcat_id',$id)
            ->where('wor_rate_tab.wor_info_id',$spList[0]->wor_info_id)
            ->get();

        //var_dump($List);
        
        return view('hire',['data'=>$spList,'list'=>$List]);
    }
}
