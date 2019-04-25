<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Input;
class home extends Controller
{
    function regPartner(Request $request){
        $cityName = DB::table('citylist_table')->get();
        return view('Registration',['cityName'=>$cityName]);

    }
    function regPartnerSubmit(Request $request){

        $request->session()->flash('newDevC', 'Your are successfully registered with us !! Our Backend team will respond soon.');
                   
		return Redirect::to('regPartner')->withInput($request->all());     
    }
}
