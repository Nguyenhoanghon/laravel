<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function features_items(){
        return view('Pages.features_items');
    }
    
}
