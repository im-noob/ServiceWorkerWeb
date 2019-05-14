<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class salonController extends Controller
{
    public $successStatus = 200;

    public function selectSalon(Request $request)
    {
        $saloonshoplist = DB::table('shop_table')
                            ->select('shop_id','shop_name','pic','address','ratting')
                            ->where('status',13)
                            ->get();

        $cityName = DB::table('arealist_table')
            ->join('citylist_table','citylist_table.city_id','=','arealist_table.cityList_id')
            ->select(DB::raw('concat(area_name,", ",city_name)  as area_city_name') ,'arealist_id')
            ->get();
        return view('salon.SalunSelect',['saloonshoplist'=>$saloonshoplist,'cityName'=>$cityName]);
    }

    function sendSaloonListByArea(Request $request){
        $areaID = $request->areaID;
        $saloonshoplist = DB::table('shop_table')
                            ->select('shop_id','shop_name','pic','address','ratting')
                            ->where('status',13)
                            ->where('work_area',$areaID)
                            ->get();
        return response()->json(['received'=>true,'saloonshoplist'=>$saloonshoplist],$this->successStatus);

    }
    public function SalonDetails(Request $request, $id){

        $spList = DB::table('wor_list_tab')
        ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','wor_price_list.price')
        ->where('wor_price_list.wor_info_id',$id)
        ->distinct()
        ->get();
        
        return view('salon.select_time',['data'=>$spList]);
        
    }
}
