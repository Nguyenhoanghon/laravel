<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
Session_start();

class admincontroller extends Controller
{
    //Dasboard
    public function dashboard_layout(){
        return view('admin.dashboard_layout');
    }
    //test 
    public function url(){
        return view('admin.market');
    }
    //login
    public function login(){
        return view('admin.login');
    }
    public function test(Request $request){
        $admin_email = $request -> Email;
        $admin_password = MD5($request -> Password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result)
        {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard_layout');
        }else {
            Session::put('message','Mật khẩu hoặc tài khoản bị sai');
            return Redirect::to('/login');
        }
        
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/login');
    }

}
