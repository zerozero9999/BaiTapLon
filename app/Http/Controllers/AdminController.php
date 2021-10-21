<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function show_adminpages(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request ->admin_email;
        $admin_password = md5( $request -> admin_password );
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first(); 
        if($result){
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_password',$result->admin_password);        
            return Redirect::to('/admin_pages');
        } 
        else{      
            return Redirect::to('/admin_login');         
        }
    }
    public function logout(){
         return view('admin_login');
    }
}
