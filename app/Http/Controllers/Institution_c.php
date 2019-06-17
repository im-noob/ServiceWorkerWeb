<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Institution_c extends Controller
{
    public $successStatus = 200;

    function getInstitutionList(Request $request){
        $filter = $request->filter; 
        if ($filter == 'all') {
            $Institutionlist = DB::table('shop_table') 
                            ->select('shop_id','shop_name','pic','address','ratting')
                            ->where('status',13)
                            ->where('shop_type','Institution')
                            // ->where('work_area',$areaID)
                            ->get();
            return response()->json([
                'received'=>true,
                'data'=>$Institutionlist
            ],$this->successStatus);
        }else{
            $Institutionlist = DB::table('shop_table') 
                            ->select('shop_id','shop_name','pic','address','ratting')
                            ->where('status',13)
                            ->where('shop_type','Institution')
                            ->where('work_area',$areaID)
                            ->get();
            return response()->json([
                'received'=>true,
                'data'=>$Institutionlist
            ],$this->successStatus);
        }
        

    } 

    function getInstitutionDetails(Request $request){
        $areaID = $request->areaID;   
        $Institutionlist = DB::table('shop_table') 
                            ->select('shop_id','shop_name','pic','address','ratting')
                            ->where('status',13)
                            ->where('work_area',$areaID)
                            ->get();
        return response()->json([
            'received'=>true,
            'data'=>$Institutionlist
        ],$this->successStatus);

    } 
}
