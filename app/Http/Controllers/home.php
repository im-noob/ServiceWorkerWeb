<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class home extends Controller
{
    function regPartner(Request $request){
        $cityName = DB::table('citylist_table')->get();
        return view('Registration',['cityName'=>$cityName]);

    }
}
