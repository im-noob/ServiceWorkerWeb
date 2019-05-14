<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class contact extends Controller
{
    function submitContactForm(Request $request){
        
        $request->validate([
            'nameCUS' => 'required|max:255',
            'emailCUS' => 'required|email',
            'mobileCUS' => 'required|numeric|digits:10',
            'OptionCUS' => 'required',
            'messageCUS' => 'required|max:1000',

        ]);
        DB::table('contect_us_table')->insert([
            'email'=> $request->emailCUS,
            'name'=> $request->nameCUS,
            'phoneno'=> $request->mobileCUS,
            'title'=> $request->OptionCUS,
            'discription'=> $request->messageCUS,
        ]);
        return back()->with('success','Request successfully submitted!');

        
    }
}
