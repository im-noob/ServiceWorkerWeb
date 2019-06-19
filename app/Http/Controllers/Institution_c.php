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

    function getInstitutionDetails($id){

        $Details = DB::table('shop_table') 
                            ->select('shop_id','shop_name','pic','address','ratting','description')
                            ->where('status',13)
                            ->where('shop_id',$id)
                            ->first();
        

        return view('Institution.InstitutionDetails',[
            'DetailsList' => $Details
        ]);

    } 
    function getPost(Request $request){
        $id = $request->id;
        $data = DB::table('notice_tab')
                    ->select('title','post',DB::raw('date_format(updated_at, "%l:%i %p %D %M %Y") as post_date'))
                    ->where('post_by_id',$id)
                    ->limit(30)
                    ->get();
        
        return response()->json([
            'received'=>true,
            'data'=>$data,
            'id'=>$id,
        ],$this->successStatus);
    }


    function getDownloadList($id){

        $Details = DB::table('shop_table') 
                            ->select('shop_name','pic')
                            ->where('status',13)
                            ->where('shop_id',$id)
                            ->first();
        
        
        $downloadList = DB::table('download_content_tab')
                            ->select('download_link','download_link_text','description','file_size',DB::raw('date_format(updated_at, "%l:%i %p %D %M %Y") as post_date'))
                            ->where('ref_id',$id)
                            ->get();

        $downloadList = [];
        return view('Institution.InstitutionDownloadContent',[
            'data' => $downloadList,
            'DetailsList' => $Details,
        ]);
    }
}
