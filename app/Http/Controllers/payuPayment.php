<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use phpDocumentor\Reflection\Types\Integer;

class payuPayment extends Controller 
{
    public $successStatus = 200;

    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
    */ 
     
    function checkNull($value)
    {
        if ($value == null) {
            return '';
        } else {
            return $value;
        }
    }

        //open payment gateway for paying
    function openPaymentGateway(Request $request){
        // var_dump($request->post());
        if (!Auth::check()) {
            echo("not Logined");
            return;
        }

        $request->validate([
            'cartitem' => 'required',
            'name' => 'required|max:255',
            'phonefordel' => 'required|numeric|digits:10',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required|numeric|digits:6',
            'address' => 'required|max:1000',
            'arealist' => 'required',
            'updateadd' => 'nullable',
            'paymenttype' => 'required',
        ]);

        $cartitem_inp = $request->cartitem;
        $name_inp = $request->name;
        $phonefordel_inp = $request->phonefordel;
        $state_inp = $request->state;
        $city_inp = $request->city;
        $zip_inp = $request->zip;
        $address_inp = $request->address;
        $arealist_inp = $request->arealist;
        $updateadd_inp = $request->updateadd;
        $paymenttype_inp = $request->paymenttype;
        
        $userID = Auth::id();

        $totalPrice = 0 ;
        $cartItems = [];
        foreach ($cartitem_inp as $key => $value) {
            //exploding to get work list id and no of item
            $interMediateArr = explode('-',$value);

            //finding price of that item form its work list id
            $priceOfProduct = DB::table('wor_price_list')
                                    ->select('price')
                                    ->where('wor_list_id',$interMediateArr[0])
                                    ->first()
                                    ->price;
            // echo($priceOfProduct);
            //putting the price of the product in array 
            $interMediateArr[2] = $priceOfProduct;

            // //pushign in main array
            array_push($cartItems,$interMediateArr);
            
            // //adding all the price of cart 
            $totalPrice += $priceOfProduct*$interMediateArr[1];
        }

        // var_dump($cartItems);



        // solving address coding
  
        $arealist_inp_Decode = DB::table('arealist_table')->select('area_name')->where('arealist_id',$arealist_inp)->first()->area_name;
        $city_inp_Decode = DB::table('citylist_table')->select('city_name')->where('city_id',$city_inp)->first()->city_name;
        $state_inp_Decode = 'Bihar';
        
        // Entry in cart lot table
        $lotID = DB::table('lot_tab')->insertGetId([
            'total_price' => $totalPrice,
            'offer_price'  => 0,
            'paid_amt' => 0,
            'customer_info_id' => $userID,
            'address' => $address_inp.",".$arealist_inp_Decode.",".$city_inp_Decode.",".$zip_inp.",".$state_inp_Decode,
        ]);

        // //making entry in cart table
        //loopign each item
        foreach ($cartItems as $key => $value) {
            //geting work id
            $workListID = $value[0];

            // geting no of item of the work
            $noofItem = intval($value[1]);

            // geting the price of the item
            $price = $value[2];

            //making entry for each item by ittrattin no of item for seprate entry
            for ($i=0; $i < $noofItem; $i++) { 
                DB::table('cart_tab')->insert([
                    'real_amt' =>$price,
                    'wor_list_id'=>$workListID,
                    'offer_amt' =>0,
                    'paid_amt' =>0,
                    'lot_id' =>$lotID,
                    
                ]);        
            }
            
        }


        //updating address if checked updateadd_inp field for next time
        if (!is_null($updateadd_inp)) {
            DB::table('customer_info_tab')
                ->where('customer_info_id',$userID)
                ->update([
                
                    'cname'=>$name_inp,
                    'city'=>$city_inp,
                    'area_list_id'=>$arealist_inp,
                    'phone'=>$phonefordel_inp,
                    'address'=>$address_inp,
                    'cpin'=>$zip_inp,


                ]);

        }
        
        

        // return;
        //Pre Payment Data Product analysis and verification
        
        






        //Pre Payment Data Requirement 

        $firstname = $name_inp;
        $email = 'sarkariformbharo@gmail.com';
        $phoneno = $phonefordel_inp;
        $productinfo = 'No Info Found';
        $amount = $totalPrice;
        
        $txnid =  $lotID."-".$userID."-".time();
        $rememberToken = Str::random(128);
        // ."-".time();

        

        //Online Payment Found

        // making entry in payment table 
        DB::table('payment_tab')->insert([
            'product_id' => $lotID,
            'user_id' => $userID,
            'transaction_id' => $txnid,
            'product_type' => 'Service',
            'amount' => $amount,
            'rememberToken'=>$rememberToken,
        ]);

        if ($paymenttype_inp == "option1") {    //checking if COD

            $status = "success";
            $mode = "COD";
            $t=time();
            $paymentTime = date("Y-m-d  H:i:s",$t);


            DB::table('payment_tab')
                ->where('transaction_id', $txnid)
                ->update([
                    'payment_status' => $status,
                    'mode' => $mode,
                    'paymentTime' => $paymentTime,
                ]);
            
            return view('payment.payment_success',[
                    'status'=>$status,
                    'amount'=>$amount,
                    'productinfo'=>$productinfo,
                    'payment_id'=>$txnid,
                    'mode'=>$mode
            ]);
        }
        // echo "$purchaseType_HD1-$productID_HD2-$userID_HD3";
        // echo "_________________________";
        // echo "$email-$phoneno-$firstname";
        // echo "_________________________";
        // echo "$productinfo-$amount";
        // echo "_________________________";
        // echo "$txnid";

       




        $MERCHANT_KEY = env('MERCHANT_KEY', 'QrJSX8h2');
        $SALT = env('SALT', 'J3G8tzrUnt');

            
        // $MERCHANT_KEY = "QrJSX8h2";
        // $SALT = "J3G8tzrUnt";
        // Merchant Key and Salt as provided by Payu.

        $PAYU_BASE_URL = "https://sandboxsecure.payu.in";       // For Sandbox Mode
        // $PAYU_BASE_URL = "https://secure.payu.in";            // For Production Mode

        /******************************************************* */
        /******************************************************* */
        /************ DON'T TOUCH LINE BELOW THIS ****************/
        /******************************************************* */
        /******************************************************* */


         //initilizing post aaray to sending request to the payment gateway

        $_POST['surl'] = url('/')."/payment_success";
        $_POST['furl'] = url('/')."/payment_failed";
        $_POST['key'] = env("MERCHANT_KEY",$MERCHANT_KEY);
        $_POST['service_provider'] = env("PAYMENT_GATEWAY_PROVIDER","payu");


        $_POST['firstname'] = $firstname;
        $_POST['email'] = $email;
        $_POST['phone'] = $phoneno;
        
        $_POST['amount'] = $amount;
        $_POST['productinfo'] = $productinfo;
        $_POST['txnid'] = $txnid;
        
        //user defined rememberToken to avoid payment tempring 
        $_POST['udf1'] = $rememberToken;













        

        $action = '';
        // $geting data form post and pusheing to posted named variable 
        $posted = array();
        if(!empty($_POST)) {
            //print_r($_POST);
          foreach($_POST as $key => $value) {    
            $posted[$key] = $value; 
            
          }
        }

        $formError = 0;

        // if transaction id is empty 
        if(empty($posted['txnid'])) {
          // Generate random transaction id
          $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        } else {
          $txnid = $posted['txnid'];
        }


        /* making hash */ 
        $hash = '';
        // Hash Sequence
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        if(empty($posted['hash']) && sizeof($posted) > 0) {
          if(
                  empty($posted['key'])
                  || empty($posted['txnid'])
                  || empty($posted['amount'])
                  || empty($posted['firstname'])
                  || empty($posted['email'])
                  || empty($posted['phone'])
                  || empty($posted['productinfo'])
                  || empty($posted['surl'])
                  || empty($posted['furl'])
                  || empty($posted['service_provider'])
          ) {
            $formError = 1;
          } else {
            //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));


            // extracting hashed detailes form $hasvarseq and pushin into anothe array name $hasstring 
            $hashVarsSeq = explode('|', $hashSequence);
            $hash_string = '';  
            foreach($hashVarsSeq as $hash_var) {
              $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
              $hash_string .= '|';
            }

            $hash_string .= $SALT;


            $hash = strtolower(hash('sha512', $hash_string));
            $action = $PAYU_BASE_URL . '/_payment';
          }

        } elseif(!empty($posted['hash'])) {
          $hash = $posted['hash'];
          $action = $PAYU_BASE_URL . '/_payment';
        }





        /* ending making hash */

        if($formError == 1){
            echo "Form Submitation Error";
        }else{
            return view('payment.PayGo',[
                                                "PAYU_BASE_URL"=>$action,
                                                "MERCHANT_KEY"=>$MERCHANT_KEY,
                                                "hash"=>$hash,
                                                'txnid'=>$txnid,
                                                'firstname'=>$_POST['firstname'],
                                                'amount'=>$_POST['amount'],
                                                'email'=>$_POST['email'],
                                                'phone'=>$_POST['phone'],
                                                'productinfo'=>$_POST['productinfo'] ,
                                                'surl'=>$_POST['surl'],
                                                'furl'=>$_POST['furl'],

                                                'udf1'=>$_POST['udf1'],
                                            ]
                        );
        }


        /******************************************************* */
        /******************************************************* */
        /************ DON'T TOUCH LINE ABOVE THIS ****************/
        /******************************************************* */
        /******************************************************* */


    }




    function payment_success_fail(Request $request){

        // print_r($request->headers->get('origin'));
        // // var_dump($_POST);
        // return;
        $status=$_POST["status"];


        $unmappedstatus=$_POST["unmappedstatus"];
        $txnid=$_POST["txnid"];
        $mode=$_POST["mode"];

        $field9=$_POST["field9"];
        $payuMoneyId=$_POST["payuMoneyId"];
        $amount = $_POST["amount"];

        $t=time();
        $paymentTime = date("Y-m-d  H:i:s",$t);
        $cardnum = "";
        if (isset($_POST["cardnum"])) {
            $cardnum  = $_POST["cardnum"];
        }

        
        // to show
        $amount=$_POST["amount"];
        $productinfo=$_POST["productinfo"];
        
        // echo("$status.$unmappedstatus.$txnid.$mode.$field9.$payuMoneyId.$paymentTime.$cardnum");
        // return;$udf1
        // status success vv dd 
        // unmappedstatus userCancelled vv
        // txnid vv
        //cardnum

        // addedon2019-03-26 20:38:11 vv
        // field9:Cancelled by user vv
        // mode:CC  vv


        //$firstname=$_POST["firstname"];
        //$posted_hash=$_POST["hash"];
        ////$mobile=$_POST['mobile'];
        //$email=$_POST["email"];

        // /* inserting success data in database */
 
        if($status == "success"){
            //remember token 
            $rememberToken = $_POST["udf1"];
            DB::table('payment_tab')
                ->where('transaction_id', $txnid)
                ->where('rememberToken', $rememberToken)
                ->update([
                    'payment_status' => 'success',
                    'unmappedstatus' => $unmappedstatus,
                    'mode' => $mode,
                    'field9' => $field9,
                    'gatewayId' => $payuMoneyId,
                    'paymentTime' => $paymentTime,
                    'cardnum' => $cardnum
                ]);

                $txnid_arr = explode('-',$txnid );

                // making purchsed test entry in test purchesed table
                DB::table('lot_tab')
                    ->where('lot_id',$txnid_arr[0])
                    ->update([
                        'paid_amt'=>$amount
                    ]);
                    


                    

        }elseif ($status == "failure") {
            DB::table('payment_tab')
                ->where('transaction_id', $txnid)
                ->update([
                    'payment_status' => 'failure',
                    'unmappedstatus' => $unmappedstatus,
                    'mode' => $mode,
                    'field9' => $field9,
                    'gatewayId' => $payuMoneyId,
                    'paymentTime' => $paymentTime,
                    'cardnum' => $cardnum
                ]);
        }
        


        //5123456789012346
        // 05/20
        // 123
        // var_dump($_POST);

        if ($status == "success") {
            return view('payment.payment_success',['status'=>$status,'amount'=>$amount,'productinfo'=>$productinfo,'payment_id'=>$txnid,'mode'=>$mode]);

        }else if($status == "failure"){
            return view('payment.payment_failed',['status'=>$status,'amount'=>$amount,'productinfo'=>$productinfo,'payment_id'=>$txnid,'mode'=>$mode]);
        }
        
    }
} 


