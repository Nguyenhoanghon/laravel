<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    //
    public function Add_category_product(){
        return view('Admin.Add_category_product');
        
    }
    public function All_category_product(){
        return view('Admin.All_category_product');
    }
}
