<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend
Route::get('/','HomeController@index' ); 
Route::get('/trang-chu','HomeController@index' );
Route::get('/menu','HomeController@menuweb' );



//Backend
Route::get('/admin_login','AdminController@index' );
Route::get('/admin_pages','AdminController@show_adminpages');
Route::get('/logout','AdminController@logout');
Route::get('/admin_dashboard','AdminController@dashboard');

//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::post('/save-category-product','CategoryProduct@save_category_product');

//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');