<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Validator;
use Redirect; 
use Input;
use function GuzzleHttp\json_decode;

class home extends Controller
{
    function regPartner(Request $request){
        $cityName = DB::table('arealist_table')
                        ->where('cityList_id',1)
                        ->get();
        return view('Registration',['areaName'=>$cityName]);

    }
    
    function regPartnerSubmit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $number1 = $request->number1;
        $number2 = $request->number2;
        $gender = $request->gender;
        $address = $request->address;
        $remarks = $request->remarks;
        $tandc = $request->tandc;
        $areaName = $request->areaName;
        $workListArr = $request->workListArr;

        // echo($name);
        // echo($email);
        // echo($number1);
        // echo($number2);
        // echo($gender);
        // echo($address);
        // echo($remarks);
        // echo($tandc);
        // var_dump($areaName);
        // echo($workListArr);

        // foreach ($areaName as $key => $value) {
        //     // DB::table('worker_service_area_tab')->insert([
        //     //     'wor_info_id'=>,
        //     //     'arealist_id'=>,
        //     // ]);
                
        //     echo($value);
        //     // echo($value->workPrice);
        // }
         
        // return;

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'nullable|email|unique:users,email',
            'number1' => 'required|numeric|digits:10',
            'number2' => 'nullable|numeric|digits:10',
            'gender' => 'required',
            'address' => 'required',
            'remarks' => 'nullable',
            'tandc' => 'required',
            'areaName' => 'required',
            'workListArr' => 'required',
        ])->validate();
        
        #user table
        $userID = DB::table('users')->insertGetId([
            'email' => $email,
            'name' => $name,
            'phone' => $number1,
            'password' => bcrypt('123456789'),
        ]);

        #insert work info table 
        DB::table('wor_info_tab')->insert([
            'name' => $name,
            'gender' => $gender,
            'phone1' => $number1,
            'phone2' => $number2,
            'address' => $address,
            'shortdesc' => $remarks,
            'wor_info_id' => $userID,
            'tmp_work_llist_json' => $workListArr,
        ]);

        #areaName
        foreach ($areaName as $key => $value) {
            DB::table('worker_service_area_tab')->insert([
                'wor_info_id'=>$userID,
                'arealist_id'=>$value,
            ]);
        }

        #workListArr insert
        // $decodedWorkList = json_decode($workListArr);
        // foreach ($decodedWorkList as $key => $value) {
        //     DB::table('worker_service_area_tab')->insert([
        //         'wor_cat_id'=>'-1',
        //         'wor_subcat_id'=>'-1',
        //     ])
                
        //     echo($value->workName);
        //     echo($value->workPrice);
        //     // /
        // }
        
        $request->session()->flash('newDevC', 'Your are successfully registered with us !! Our Backend team will respond soon.');
                   
		return Redirect::to('regPartner')->withInput($request->all());     
    }
}
