<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');
    }
    public function all_category_product(){

        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    }
    public function save_category_product(Request $request){
        $date = array();
        $date['category_name'] = $request->category_product_name;
        $date['category_desc'] = $request->category_product_desc;
        $date['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')-> insert($date);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');    
    }
}
