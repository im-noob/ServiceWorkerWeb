<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class MyOrder_c extends Controller
{
    public $successStatus = 200;
    function loadYourLotOrderPage(){
        $statusArrList = [
            "Wating for verification",
            "Verified",
            "cancleed",
            "In Process",
            "Worker Visited",
            "Worker Start Working",
            "Work Complete",
            "Payment Received",
            "Worker available",
            "Worker Not available",
            "Feedback Given by customer",
            "Feedback Given by worker",
            "Unactive",
            "Active"
        ];
        $userID = Auth::id();
        $lotList = DB::table('lot_tab')
                            ->select('lot_id', 'paid_amt', 'status', 'address','total_price','created_at' )
                            ->where('customer_info_id',$userID)
                            ->orderBy('created_at', 'desc')
                            ->limit(20)
                            ->get();
        
        for ($i = 0 ; $i < sizeof($lotList); $i++) {

                $car_table =  DB::table('cart_tab')
                            ->join('wor_list_tab','wor_list_tab.wor_list_id','=','cart_tab.wor_list_id')
                            ->select(
                                'cart_id', 
                                'cart_tab.status as status',
                                'work_name',
                                DB::raw('(
                                    select name 
                                    from wor_info_tab 
                                    where wor_info_id = cart_tab.wor_info_id
                                    
                                ) as workerName'),
                                'cart_tab.wor_info_id as workerID'
                                
                            )
                            ->where('lot_id',$lotList[$i]->lot_id)
                            ->get();

                $lotList[$i]->cart_tab = $car_table;

        }

        return view('MyOrder',[
            'userID'=>$userID,
            'lotList'=> $lotList, 
            'statusArrList'=>$statusArrList,
        ]);
    }

    //accept review 
    function submitReview(Request $request){

        $request->validate([
            'lotId' => 'required',
            'cartID' => 'required',
            'userID' => 'required',
            'workerID' => 'nullable',
            'ratting' => 'required',
            'reviewTextArea' => 'nullable',
        ]);
        

        //inserting to database
        DB::table('feedback_table')->insert([
            'lot_id' => $request->lotId,
            'cartID' => $request->cartID,
            'cutomer_id' => $request->userID,
            'wor_info_id' => $request->workerID,
            'ratting' => $request->ratting,
            'feedback' => $request->reviewTextArea,

        ]);
        return response()->json(['received'=>true,],$this->successStatus);        
    }

    //accept report 
    function submitReport(Request $request){
        $request->validate([
            'lotId' => 'required',
            'cartID' => 'required',
            'userID' => 'required',
            'workerID' => 'nullable',
            'reporttextarea' => 'required',
        ]);

        //inserting to databse
        DB::table('report_table')->insert([
            'lot_id' => $request->lotId,
            'cartID' => $request->cartID,
            'cutomer_id' => $request->userID,
            'wor_info_id' => $request->workerID,
            'Problem' => $request->reporttextarea,
        ]);
        return response()->json(['received'=>true,],$this->successStatus);        
    }

}
