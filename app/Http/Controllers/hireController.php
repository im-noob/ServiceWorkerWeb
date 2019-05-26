<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Redirect;
use function GuzzleHttp\json_encode;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class hireController extends Controller
{
    // public function hireSubmit(Request $request){
        
    //     if(session_status() == PHP_SESSION_NONE) 
    //     {
    //         session_start();
    //     }
    //     $worker_id = $request->id;
    //     $_SESSION["worker_id"] = $worker_id;
    //     return view('info');
    // }

    public function hirePage($type,$id){
        
        $spList = null;
        if ($type == "home") {
            $spList = DB::table('wor_list_tab')
                        // ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
                        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','price','info')
                        ->where('wor_list_tab.wor_subcat_id',$id)
                        ->where('status',13)
                        // ->distinct()
                        ->get();


            //print_r($spList);exit();
            
        }else if($type == "shop"){


            $spList = DB::table('wor_list_tab')
                        ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
                        ->join('wor_info_tab','wor_info_tab.wor_info_id','=','wor_price_list.wor_info_id')
                        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','wor_price_list.price','info')
                        ->where('wor_info_tab.shop_id',$id)
                        ->where('wor_info_tab.status',13)
                        // ->distinct()
                        ->get();


            //print_r($spList);exit();
            // return view('hire',['data'=>$spList,'subcat'=>$id]);
        }else if($type == "search"){
            $spList = DB::table('wor_list_tab')
                        // ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
                        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','price','info')
                        ->where('wor_list_tab.work_name','LIKE', '%'.$id.'%')
                        ->where('status',13)
                        // ->distinct()
                        ->get();

        }
        return view('hire',['data'=>$spList,'subcat'=>$id,'type'=>$type]);
        
    }

    // public function conformOTP(Request $request){
        
    //     if(session_status() == PHP_SESSION_NONE) 
    //     {
    //         session_start();
    //     }
    //     $sotp = $_SESSION["cpt"];
    //     $iotp = $request->otp;
    //     $mobile = $_SESSION["mobile"];
    //     $o_id = $_SESSION["o_id"];
    //     if($iotp == $sotp){
           
    //         try{
    //             DB::table('users')
    //                 ->update(['status'=>1])
    //                 ->where('phone',$mobile);
                    
    //             DB::table('wor_order_tab')
    //                 ->update(['otp_verified' => 1])
    //                 ->where('wor_order_id', $o_id);
    //         }
    //         catch(Exception $e){
    //             return redirect()->back()->with('alert', 'Something went wrong');
    //         }    
    //     }
    //     else{
    //         return redirect()->back()->with('alert', 'Invalid OTP');
    //     }
        
    //     echo "<script type='text/javascript'> alert('Scccessfully order placed.'); </script>";
    //     Redirect::to('/');
    // }

    // public function SetAddresss(Request $request){

    //     $name= $request->fullName;
    //     $mobileNo= $request->mobileNo;
    //     $email= $request->email;
    //     $YourCity= $request->YourCity;
    //     $state= $request->state;
    //     $pincide= $request->pincide;
    //     $Address= $request->Address;

    //     if(session_status() == PHP_SESSION_NONE) 
    //     {
    //         session_start();
    //     }
    
    //     $worker_id = $_SESSION["worker_id"];

    //     $user = DB::table('users')
    //                 ->select('id')
    //                 ->where('phone',$mobileNo)
    //                 ->get();

    //     $user_id = "";
    //     if(sizeof($user) > 0){
    //         $user_id = $user->id;
    //     }
    //     else{
    //         DB::table('users')
    //             ->insert([
    //                 'phone' => $mobileNo,
    //                 'name' => $name,
    //                 'password' => 'password',
    //                 'email' => $email,
    //                 'user_type' => "customer",
    //             ]);

    //         $user_id = mysql_insert_id();
    //     }

    //     DB::table('customer_info_tab')
    //         ->insert([
    //             'customer_info_id' => $user_id,
    //             'cname' => $name,
    //             'state' => $state,
    //             'city' => $YourCity,
    //             'phone' =>  $mobileNo,
    //             'cpin' => $pincide,
    //             'address' => $Address,
    //             'user_id' => $user_id
    //         ]);
            
    //     $customer_id = mysql_insert_id();
        
    //     DB::table('wor_order_tab')
    //         ->insert([
    //             'wor_info_id' => $user_id,
    //             'wor_subcat_id' => $request->id,
    //             'customer_info_Id' => $customer_id,
    //         ]);
        
    //     $num = rand(1000,9999);
    //     $_SESSION["cpt"] = $num;

    //     return view('conformRequest',['otp'=>$num,'url1'=>'/hire/cnfrmotp']);
        
    // }

    // public function getUserInfo(Request $request){
       
    //     $List = DB::table('wor_info_tab')
    //         ->select('name','state','city','pin_code','address','location','no_of_profile_view','wor_info_id')
    //         ->where('wor_info_id',$request->id)
    //         ->get();

    //     $List1 = DB::table('wor_rate_tab')
    //         ->join('wor_subcat_tab','wor_subcat_tab.wor_subcat_id','=','wor_rate_tab.wor_subcat_id')
    //         ->select('wor_subcat_tab.subcat_name','wor_rate_tab.*')
    //         ->where('wor_info_id',$request->id)
    //         ->get();
    //     $data = [];
        
    //     array_push($data,$List);
    //     array_push($data,$List1);
    //     return json_encode($data);

    // }

    // public function addToCart(Request $request){
        
    //     $work_id = $request->work_id;
    //     $count = $request->count;

    //     $localList = array(
    //         'war_id'=>$work_id,
    //         'count'=>$count
    //     );

    //     if(session_status() == PHP_SESSION_NONE) 
    //     {
    //         session_start();
    //     }

    //     $cval = 1;
    //     if(Session::has('count')){
    //         $cval = Session::get('count');
    //         $cval = $cval + 1; 
    //     }
    //     Session::put('count',$cval);

    //     if(Session::has('cart'))
    //     {
    //         global $data;
    //         $data = Session::get('cart');
    //         Session::remove('cart');
    //         array_push($data,$work_id);
    //         Session::put('cart',$data);
    //     }else{
    //         $data= array();
    //         array_push($data,$work_id);
    //         Session::put('cart',$data);
    //     }
    //     return json_encode($data);
    // }


    //my cdoe for cart lis tiem details 
    public function CartListItem(Request $request){

        $cityList = DB::table('citylist_table')
            ->get();

        $areaList = DB::table('arealist_table')
            ->join('citylist_table','citylist_table.city_id','=','arealist_table.cityList_id')
            ->select(DB::raw('concat(area_name,", ",city_name)  as area_city_name') ,'arealist_id')
            ->get();

        $auth = "not chcked";
        $userID = null;
        $userData = null;

        //checking fo loignin
        if(Auth::check()){
            //geting use data when logined
            $auth = 1;
            $userID = Auth::id();
            $userData = DB::table('customer_info_tab')
                            ->select('cname','city','area_list_id','phone','cpin','address')
                            ->where('customer_info_id',$userID)
                            ->first();
        }else{
            $auth = 0;
        }

        return view('CommonWorkList',[
                                        'cityList'=>$cityList,
                                        'areaList'=>$areaList,
                                        'Auth'=>$auth,
                                        'userID'=>$userID,
                                        'userData'=> $userData, 
                                    ]);
    }

    function showDetails($type,$id){

        $DetailsList = null;
        if ($type == "home") {
            $DetailsList = DB::table('wor_list_tab')
                        // ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
                        ->select('wor_list_id','work_name','pic','backpic','work_type','price','info')
                        ->where('wor_list_id',$id)
                        ->where('status',13)
                        // ->distinct()
                        ->first();
            // Averag3 ratting
            $avgRattingRaw = DB::table('feedback_table')
                        ->join('cart_tab','cart_tab.cart_id','=','feedback_table.cartID')
                        ->select('ratting')
                        ->where('cart_tab.wor_list_id',$id)
                        ->avg('ratting');

            // rounding off to 1 digit
            $avgRatting = round($avgRattingRaw,1);
            // echo("avg\n");
            // print_r($avgRatting);

            // Total ratting
            $countRatting = DB::table('feedback_table')
                        ->join('cart_tab','cart_tab.cart_id','=','feedback_table.cartID')
                        ->select('ratting')
                        ->where('cart_tab.wor_list_id',$id)
                        ->count();
            // echo("Count\n");
            // print_r($countRatting);

            //Rattig List 
            $rattingList = DB::table('feedback_table')
                            ->join('cart_tab','cart_tab.cart_id','=','feedback_table.cartID')
                            ->join('customer_info_tab','customer_info_tab.customer_info_id','=','feedback_table.cutomer_id')
                            ->select('customer_info_tab.cname as cname','customer_info_tab.pic as pic','ratting','feedback',DB::raw('date_format(feedback_table.created_at, "%M %Y") as feedback_date'))
                            ->where('cart_tab.wor_list_id',$id)
                            ->where('ratting','>',4.0)
                            ->limit(5)
                            ->get();
            // echo("List\n");
            // print_r($rattingList);

            //print_r($DetailsList);exit();
            
        }else if($type == "shop"){


            $DetailsList = DB::table('wor_list_tab')
                        ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
                        ->join('wor_info_tab','wor_info_tab.wor_info_id','=','wor_price_list.wor_info_id')
                        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','wor_price_list.price','info')
                        ->where('wor_info_tab.shop_id',$id)
                        ->where('wor_info_tab.status',13)
                        // ->distinct()
                        ->get();


            //print_r($DetailsList);exit();
            // return view('hire',['data'=>$DetailsList,'subcat'=>$id]);
        }else if($type == "search"){
            $DetailsList = DB::table('wor_list_tab')
                        // ->join('wor_price_list','wor_price_list.wor_list_id','=','wor_list_tab.wor_list_id')
                        ->select('wor_list_tab.wor_list_id','work_name','wor_list_tab.pic','work_type','price','info')
                        ->where('wor_list_tab.work_name','LIKE', '%'.$id.'%')
                        ->where('status',13)
                        // ->distinct()
                        ->get();

        }

        // return;
        return view('productDetails',[
            'DetailsList'=>$DetailsList,
            'avgRatting'=>$avgRatting,
            'countRatting'=>$countRatting,
            'rattingList'=>$rattingList,
        ]);
        
    }
}
