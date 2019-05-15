<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\each;

class IndexController extends Controller
{
    public $successStatus = 200;
    function getAllService(){
        $cat = DB::table('wor_cat_tab')
                ->select('wor_cat_id','wor_cat_name')
                ->where('status',13)
                // ->whereRaw('(

                //     (SELECT COUNT(*) FROM wor_list_tab WHERE wor_subcat_id in (
                //         SELECT wor_subcat_id FROM wor_subcat_tab WHERE wor_cat_id = wor_cat_tab.wor_cat_id
                //     ) )
                // )')
                ->get();
        
        $dataArray = [];
        if(sizeof($cat,1) > 0){
            for($i = 0 ; $i < sizeof($cat,1) ; $i++){ 
                $tempData = [];
                $sub = DB::table('wor_subcat_tab')
                    ->where('wor_cat_id',$cat[$i]->wor_cat_id)
                    ->where('status',13)
                    // ->whereRaw('(SELECT COUNT(*) FROM wor_list_tab WHERE wor_subcat_id = wor_subcat_tab.wor_subcat_id)')
                    // ->skip(0)->take(4)
                    ->get();
                array_push($tempData,$cat[$i]->wor_cat_id);
                array_push($tempData,$cat[$i]->wor_cat_name);
                array_push($tempData,$sub);
                array_push($dataArray,$tempData);
            }
        }

        // echo "size : ".sizeof($dataArray,1);
        // var_dump($dataArray);
        // exit();
       
        $subCat = [];
        if(sizeof($cat,1)) {
            $subCat = DB::table('wor_subcat_tab')
                ->where('wor_cat_id',$cat[0]->wor_cat_id)
                ->where('status',13)
                ->get();
        }
        
        return response()->json([
            'received'=>true,
            'category'=>$cat,
            'subcat'=>$subCat
        ],$this->successStatus);
    }
    public function homeView(Request $request){

        $cat = DB::table('wor_cat_tab')
                ->select('wor_cat_id','wor_cat_name')
                ->where('status',13)
                // ->whereRaw('(

                //     (SELECT COUNT(*) FROM wor_list_tab WHERE wor_subcat_id in (
                //         SELECT wor_subcat_id FROM wor_subcat_tab WHERE wor_cat_id = wor_cat_tab.wor_cat_id
                //     ) )
                // )')
                ->get();
        
        $dataArray = [];
        if(sizeof($cat,1) > 0){
            for($i = 0 ; $i < sizeof($cat,1) ; $i++){ 
                $tempData = [];
                $sub = DB::table('wor_subcat_tab')
                    ->where('wor_cat_id',$cat[$i]->wor_cat_id)
                    ->where('status',13)
                    // ->whereRaw('(SELECT COUNT(*) FROM wor_list_tab WHERE wor_subcat_id = wor_subcat_tab.wor_subcat_id)')
                    // ->skip(0)->take(4)
                    ->get();
                array_push($tempData,$cat[$i]->wor_cat_id);
                array_push($tempData,$cat[$i]->wor_cat_name);
                array_push($tempData,$sub);
                array_push($dataArray,$tempData);
            }
        }

        // echo "size : ".sizeof($dataArray,1);
        // var_dump($dataArray);
        // exit();
       
        $subCat = [];
        if(sizeof($cat,1)) {
            $subCat = DB::table('wor_subcat_tab')
                ->where('wor_cat_id',$cat[0]->wor_cat_id)
                ->where('status',13)
                ->get();
        }
        
        

        $feedback = [];
        // $cityName = DB::table('arealist_table')
        //             ->where('cityList_id',1)
        //             ->get();
        

        $cityName = DB::table('arealist_table')
            ->join('citylist_table','citylist_table.city_id','=','arealist_table.cityList_id')
            ->select(DB::raw('concat(area_name,", ",city_name)  as area_city_name') ,'arealist_id')
            ->get();
            
        $feedback = DB::table('feedback_table')
                ->join('customer_info_tab','customer_info_tab.customer_info_id','=','feedback_table.cutomer_id')
                ->join('wor_info_tab','wor_info_tab.wor_info_id','=','feedback_table.wor_info_id')
                ->select('ratting','feedback','cname','customer_info_tab.pic as cuspic','name','wor_info_tab.pic as worpic')
                ->skip(0)->take(4)
                ->orderByDesc('ratting')
                ->where('ratting','>',4.4)
                ->limit(3)
                ->get();
        // var_dump($feedback);
        // return;

        return view('home',['data'=>$dataArray,'category'=>$cat,'subcat'=>$subCat,'feedback'=>$feedback,'cityName'=>$cityName]);
    }

    public function getSubcategory(Request $request){
        $subCat = DB::table('wor_subcat_tab')
        ->where('wor_cat_id',$request->form_id)
        ->get();
        return json_encode($subCat);
    }

    //ajax for searching account
    function searchResult(Request $request){

        $cityID = $request->cityID;
        $incoingSearchText = $request->searchText;
        //preventing form sql injection
        $searchText = $incoingSearchText;


        // //exploding keywords
        // $searchWords = explode(" ",$searchText);  

        // //loking in database 
        // $result = DB::table('wor_list_tab')
        //     ->select('wor_list_id','work_name')
        //     ->where(function($query) use($searchWords){

        //         foreach($searchWords as $word){
        //             $query->orWhere('work_name', 'LIKE', '%'.$word.'%');
        //         }
                
        //     })
        //     ->where('status',13)
        //     ->distinct()
        //     ->get();

        /************************ KEEP IN MIND HERE WHERE CAN BE VARNABLE to SQL Attack ************************* */
        //loking in database with FUll text search
        $result = DB::table('wor_list_tab')
            ->selectRaw('wor_list_id,work_name,MATCH(work_name,tags,info) against ( ? IN BOOLEAN MODE) as relevance_score',[$searchText])
            ->whereRaw("MATCH(work_name,tags,info) against ( '*".$searchText."*' IN BOOLEAN MODE)")
            ->orderByDesc('relevance_score')
            ->where('status',13)
            ->limit(10)
            ->distinct()
            ->get();


        $resultArr = [];
        foreach($result as $key => $value){
            $interArr = [];
            $interArr['label'] = $value->work_name;
            $interArr['value'] = $value->work_name;

            array_push($resultArr,$interArr);
        }
            

        return response()->json(['received'=>true,'list'=>$resultArr],$this->successStatus);
    }
}
