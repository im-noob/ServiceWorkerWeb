<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class authController extends Controller
{
    public function sendOtp(Request $request){

        $mobile_no = $request->mobileno;
        echo "send otp";
        session_start();
        $num = rand(1000,9999);
        $_SESSION["cpt"] = $num;
        $_SESSION["mobile"] = $mobile_no;
        return $num;
    }

    public function logout(Request $request){
        return Redirect::to('/');
    }

    public function authenticate(Request $request){
        
        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $sotp = $_SESSION["cpt"];
        $iotp = $request->otp;
        $mobile = $_SESSION["mobile"];
        if($iotp == $sotp){
            $_SESSION["login"] = true;

            $user_id = DB::table('users')
                        ->select('id')
                        ->where('phone',$mobile)
                        ->get();

            if(sizeof($user_id) == 0)
            {
                DB::table('users')
                    ->insert([
                        'phone'=>$mobile,
                        'name' => 'name',
                        'password'=>'password',
                        'email'=>'email',
                        'user_type' => "customer"
                    ]);
            } 

            return view('profile',['mobile'=>$mobile]);
        }
        return redirect()->back()->with('alert', 'Invalid OTP');
    }

    public function profileSubmit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile_no;

        $data = array(
            'name' =>$name,
            'email' =>  $email
        );

        DB::table('users')
        ->where('phone', $mobile)
        ->update($data);

        echo "<script type='text/javascript'> alert('Updated Successfully.'); </script>";
        return Redirect::to('/');
    }

    public function SenOTPToUser(Request $request){
       
        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $mobile_no = $_GET['mobileNo'];
        $sub_Id = $_GET['sub_id'];

        $_SESSION["cpt"] = "1234";
        $_SESSION["mobile"] = $mobile_no;
        $_SESSION["sub_id"] = $sub_Id;
        
        $num = rand(1000,9999);
       
        return view('conformRequest',['url1'=>"/signupForm"]);
    }

    public function signUp(Request $request){

        $subcatList = DB::table('wor_subcat_tab')->get();

        return view('signUp',['data'=>$subcatList]);

    }

    public function cnfrmOTPofUser(Request $request){
        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $mobile_no = $_SESSION["mobile"];
        $sub_Id = $_SESSION["sub_id"];

        $sotp = $_SESSION["cpt"];
        $cotp = $_POST["otp"];
        if($sotp == $cotp){

            $subCat = DB::table('wor_subcat_tab')
                        ->select('subcat_name')
                        ->where('wor_subcat_id',$sub_Id)
                        ->get();

            return view('signupForm',['subcat'=>$subCat,'mobile'=>$mobile_no]);
        }
        else{
            return redirect()->back()->with('alert', 'Invalid OTP');
        }
    }

    public function SubmitServiceProfile(Request $request){

        $UserData = array();
       
        $workerInfo = array();
        $workerRate = array();
        if(isset($_POST['name'])){
            global $UserData;
            global $workerInfo;
            $UserData["name"] = $_POST['name'];
            $workerInfo["name"] = $_POST['name'];
        }

        if(isset($_POST['email'])){
            global $UserData;
            $UserData["email"] = $_POST['email'];
        }
        
        if(isset($_POST['pMin'])){
            global $workerRate;
            $workerRate["min_price"] = $_POST['pMin'];
        }

        if(isset($_POST['pMax'])){
            global $workerRate;
            $workerRate["max_price"] = $_POST['pMax'];
        }

        if(isset($_POST['city'])){
            $workerInfo["city"] = $_POST['city'];
        }

        if(isset($_POST['State'])){
            $workerInfo["state"] = $_POST['State'];
        }

        if(isset($_POST['pin'])){
            $workerInfo["pin_code"] = $_POST['pin'];
        }

        if(isset($_POST['Address'])){
            $workerInfo["address"] = $_POST['Address'];
        }

        if(isset($_POST['Address'])){
            $workerInfo["address"] = $_POST['Address'];
        }

        if(isset($_POST['tForm']) && isset($_POST["tTO"])){
            $workerInfo["work_hour"] = $_POST['tForm']. '-' .$_POST["tTO"];
        }

        $UserData['user_type'] = "worker";
        $UserData['password'] = "12345";

        $nametoupload = '';
        if(isset($_FILES["pic"])){

            $FILES = $_FILES["pic"];
            $upload_dir = storage_path('app/public/worker/');
            // create folder if not exists
            if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
            }

            //Send error 
            if ($FILES['error'])
            {
                echo "<script type='text/javascript'> alert('Invalid Image'); </script>";
                return redirect()->back();
            }

            //Change file name
            $target_file1 = uniqid().time();
            $imageFileType = pathinfo($FILES["name"],PATHINFO_EXTENSION);
            $target_file = $upload_dir.$target_file1.'.'.$imageFileType;

        
            //Upload file
            if (move_uploaded_file($FILES["tmp_name"], $target_file))
            {	
                //global $nametoupload;
                $nametoupload = '/storage/app/public/worker/'.$target_file1.'.'.$imageFileType;
            }
            else
            {
                echo "<script type='text/javascript'> alert('Invalid Image'); </script>";
                return redirect()->back();
            }	
        }
        
        if(session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
        $mobile_no = $_SESSION["mobile"];
        $sub_Id = $_SESSION["sub_id"];
        
        $UserData["phone"] = $mobile_no;
        $workerRate["wor_subcat_id"] = $sub_Id;

        $workerInfo["pic"] = $nametoupload;
        $workerInfo["phone"] = $mobile_no;
        $IsUserE = DB::table('users')->where('phone',$mobile_no)
            ->select('id')->get();

        if(sizeof($IsUserE)){
            echo "updated Called";
            DB::table('users')
                ->where('phone',$mobile_no)
                ->update($UserData);
            $user_id = $IsUserE[0]->id;
        }
        else{
            DB::table('users')
                ->insert($UserData);
            $user_id = DB::table('users')->max('id');
        }

        $workerRate["wor_info_id"] = $user_id;
        $wor_info_tab = DB::table('wor_info_tab')->where('wor_info_id',$user_id)
            ->select('wor_info_id')->get();

        if(sizeof($wor_info_tab)){
            DB::table('wor_info_tab')
            ->where('wor_info_id',$user_id)
            ->update($workerInfo);
        }
        else{
            DB::table('wor_info_tab')->insert($workerInfo);
        }

        $wor_rate = DB::table('wor_rate_tab')->where('wor_info_id',$user_id)
            ->select('wor_rate_id')->get();
        
        if(sizeof($wor_rate)){
            DB::table('wor_rate_tab')
                ->where('wor_rate_id',$wor_rate[0]->wor_rate_id)
                ->update($workerRate);
        }
        else{
            DB::table('wor_rate_tab')
            ->insert($workerRate);
        }
       return Redirect::to('/');
    }

}
