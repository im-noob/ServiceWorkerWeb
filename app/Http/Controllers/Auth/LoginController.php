<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public $successStatus = 200;
    // /*
    // |--------------------------------------------------------------------------
    // | Login Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles authenticating users for the application and
    // | redirecting them to your home screen. The controller uses a trait
    // | to conveniently provide its functionality to your applications.
    // |
    // */

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        
        $user = User::where([
                    ['phone', '=', $request->phone],
                    ['OTP', '=', $request->OTP],

                ])->first();
        
        $phone = $request->phone;
        
        if($user != null){
            
            //checking if status is valid 
            $status = DB::table('users')->select('status')->where('id',$user->id)->first();
            
            //checking if 5 mint gone 
            $validTime = DB::table('users')->selectRaw('TIMESTAMPDIFF(MINUTE,updated_at,now())<5 as valid')->where('id',$user->id)->first();

            if (Auth::loginUsingId($user->id,true) && $status->status == '13' && $validTime->valid == '1') {
                //making entry in cutomer info table if no record is there or if it is a registration
                if(DB::table('customer_info_tab')->where('customer_info_id', $user->id)->doesntExist()){
                    //checking if record not exist make a record
                    DB::table('customer_info_tab')->insert([
                        'customer_info_id' =>  $user->id,
                        'phone' => $phone,
                    ]);
                }
                //login success
                return response()->json(['received'=>true,'loginsuccess'=>true,'back'=>$user->id],$this->successStatus);
            }else if($status->status == '12'){
                // unactive and status is 12 
                return response()->json(['received'=>true,'loginsuccess'=>'blocked','back'=>$status->status],$this->successStatus);
            }else if($validTime->valid == '0'){
                // unactive and status is 12 
                return response()->json(['received'=>true,'loginsuccess'=>'expire','back'=>$status->status],$this->successStatus);
            }else{

                return response()->json(['received'=>true,'loginsuccess'=>false,'back'=>$status->status],$this->successStatus);    
            }

        }else{
            return response()->json(['received'=>true,'loginsuccess'=>false],$this->successStatus);
        }
    }
    
    public function sendOtp(Request $request){
        $phoneno = $request->phone;
        $genOTP = $this->generateNumericOTP(6);
        if($this->sendOTPtouser($phoneno,$genOTP)){
            DB::table('users')
                ->updateOrInsert(
                    ['phone' => $phoneno],
                    ['OTP' => $genOTP]
                );
            return response()->json(['received'=>true,'OTPsent'=>true],$this->successStatus);
        }else{
            return response()->json(['received'=>true,'OTPsent'=>false],$this->successStatus);
        }
        
    }

    //sendOTPAPI
    function sendOTPtouser($phone,$otp){
        return(true);
    }
     // Function to generate OTP 
    function generateNumericOTP($n) { 
            
        // Take a generator string which consist of 
        // all numeric digits 
        $generator = "1357902468"; 
    
        // Iterate for n-times and pick a single character 
        // from generator and append it to $result 
        
        // Login for generating a random character from generator 
        //     ---generate a random number 
        //     ---take modulus of same with length of generator (say i) 
        //     ---append the character at place (i) from generator to result 
    
        $result = ""; 
    
        for ($i = 1; $i <= $n; $i++) { 
            $result .= substr($generator, (rand()%(strlen($generator))), 1); 
        } 
    
        $result = "123456";
        // Return result 
        return $result; 
    }

    public function logout(Request $request){
        Auth::logout();
        return Redirect::to('/');
    }
}
