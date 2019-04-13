<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homeView(Request $request){

        $cat = DB::table('wor_cat_tab')
                ->select('wor_cat_id','wor_cat_name')
                ->get();

        $dataArray = [];
        for($i = 0 ; $i < 5; $i++){
            $tempData = [];
            $sub = DB::table('wor_subcat_tab')
                ->where('wor_cat_id',$cat[$i]->wor_cat_id)
                ->skip(0)->take(4)
                ->get();

            array_push($tempData,$cat[$i]->wor_cat_id);
            array_push($tempData,$cat[$i]->wor_cat_name);
            array_push($tempData,$sub);
            array_push($dataArray,$tempData);
        }

        $subCat = DB::table('wor_subcat_tab')
        ->where('wor_cat_id',$cat[0]->wor_cat_id)
        ->get();

        $feedback = DB::table('wor_order_tab')
                ->join('wor_info_tab','wor_info_tab.wor_info_id','=','wor_order_tab.wor_info_id')
                ->join('customer_info_tab','customer_info_tab.customer_info_id','=','wor_order_tab.customer_info_Id')
                ->select('ratting','feedback','wor_order_tab.updated_at','customer_info_tab.cname','customer_info_tab.city','wor_info_tab.name','wor_info_tab.pic as wpic','customer_info_tab.pic')
                ->skip(4)->take(4)
                //->orderByDesc('ratting')
                ->get();
        //var_dump($feedback);
        return view('home',['data'=>$dataArray,'category'=>$cat,'subcat'=>$subCat,'feedback'=>$feedback]);
    }

    public function getSubcategory(Request $request){
        $subCat = DB::table('wor_subcat_tab')
        ->where('wor_cat_id',$request->form_id)
        ->get();
        return json_encode($subCat);
    }

}
