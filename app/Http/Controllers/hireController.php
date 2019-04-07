<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Redirect;

class hireController extends Controller
{
    public function hireSubmit(Request $request){
        
        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $worker_id = $request->id;
        $_SESSION["worker_id"] = $worker_id;
        return view('info');
    }

    public function hirePage($id){
        
        $spList = DB::table('wor_info_tab')
            ->join('wor_rate_tab','wor_rate_tab.wor_info_id','=','wor_info_tab.wor_info_id')
            ->select('name','work_exp','work_hour','no_of_work','rating','pic','no_of_profile_view','wor_info_tab.wor_info_id')
            ->where('wor_subcat_id',$id)
            ->get();

        $ServiceList = [];
        foreach($spList as $msg){
            $localData = [
                'name'=>$msg->name,
                'work_exp'=>$msg->work_exp,
                'work_hour' => $msg->work_hour,
                'no_of_work'=>$msg->no_of_work,
                'rating' => $msg->rating,
                'pic'=>$msg->pic,
                'no_of_profile_view' => $msg->no_of_profile_view,
                'wor_info_id' => $msg->wor_info_id
            ];
            
            $List1 = DB::table('wor_rate_tab')
                ->join('wor_subcat_tab','wor_subcat_tab.wor_subcat_id','=','wor_rate_tab.wor_subcat_id')
                ->select('wor_subcat_tab.subcat_name','wor_rate_tab.*')
                ->where('wor_info_id',$msg->wor_info_id)
                ->get();

            $localData['priceList'] = $List1; 
            array_push($ServiceList,$localData);
        }

        //var_dump($ServiceList);
        // if(sizeof($spList))
        // {
        //     $List1 = DB::table('wor_rate_tab')
        //         ->join('wor_subcat_tab','wor_subcat_tab.wor_subcat_id','=','wor_rate_tab.wor_subcat_id')
        //         ->select('wor_subcat_tab.subcat_name','wor_rate_tab.*')
        //         ->where('wor_info_id',$spList[0]->wor_info_id)
        //         ->get();

        //     return view('hire',['data'=>$spList,'list'=>$List,'worklist'=>$List1,'status'=>"true"]);
        // }

        return view('hire',['data'=>$ServiceList,'subcat'=>$id]);
    }

    public function conformOTP(Request $request){
        
        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $sotp = $_SESSION["cpt"];
        $iotp = $request->otp;
        $mobile = $_SESSION["mobile"];
        $o_id = $_SESSION["o_id"];
        if($iotp == $sotp){
           
            try{
                DB::table('users')
                    ->update(['status'=>1])
                    ->where('phone',$mobile);
                    
                DB::table('wor_order_tab')
                    ->update(['otp_verified' => 1])
                    ->where('wor_order_id', $o_id);
            }
            catch(Exception $e){
                echo "<script type='text/javascript'> alert('Sometning went wrong'); </script>";
                Redirect::to('/');
            }    
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong OTP'); </script>";
            Redirect::to('/');
        }
        
        echo "<script type='text/javascript'> alert('Scccessfully order placed.'); </script>";
        Redirect::to('/');
    }

    public function SetAddresss(Request $request){

        $name= $request->fullName;
        $mobileNo= $request->mobileNo;
        $email= $request->email;
        $YourCity= $request->YourCity;
        $state= $request->state;
        $pincide= $request->pincide;
        $Address= $request->Address;

        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
    
        $worker_id = $_SESSION["worker_id"];

        $user = DB::table('users')
                    ->select('id')
                    ->where('phone',$mobileNo)
                    ->get();
        $user_id = "";
        if(sizeof($user) > 0){
            $user_id = $user->id;
        }
        else{
            DB::table('users')
                ->insert([
                    'phone' => $mobileNo,
                    'name' => $name,
                    'password' => 'password',
                    'email' => $email,
                    'user_type' => "customer",
                ]);
           
            $user_id = mysql_insert_id();
        }

        DB::table('customer_info_tab')
            ->insert([
                'customer_info_id' => $user_id,
                'cname' => $name,
                'state' => $state,
                'city' => $YourCity,
                'phone' =>  $mobileNo,
                'cpin' => $pincide,
                'address' => $Address,
                'user_id' => $user_id
            ]);
            
        $customer_id = mysql_insert_id();
        
        DB::table('wor_order_tab')
            ->insert([
                'wor_info_id' => $user_id,
                'wor_subcat_id' => $request->id,
                'customer_info_Id' => $customer_id,
            ]);
        
        $num = rand(1000,9999);
        $_SESSION["cpt"] = $num;

        return view('conformRequest',['otp'=>$num]);
        
    }
    public function getUserInfo(Request $request){
       
        $List = DB::table('wor_info_tab')
            ->select('name','state','city','pin_code','address','location','no_of_profile_view','wor_info_id')
            ->where('wor_info_id',$request->id)
            ->get();

        $List1 = DB::table('wor_rate_tab')
            ->join('wor_subcat_tab','wor_subcat_tab.wor_subcat_id','=','wor_rate_tab.wor_subcat_id')
            ->select('wor_subcat_tab.subcat_name','wor_rate_tab.*')
            ->where('wor_info_id',$request->id)
            ->get();
        $data = [];
        
        array_push($data,$List);
        array_push($data,$List1);
        return json_encode($data);

    }
}
