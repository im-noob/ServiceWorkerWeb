<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salonController extends Controller
{
    public function selectSalon(Request $request)
    {
        return view('salon.SalunSelect');
    }

    public function SalonDetails(Request $request){

        return view('salon.select_time');
        
    }
}
