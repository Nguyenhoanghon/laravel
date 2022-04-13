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
Route::get('/', function () {
    return view('welcome');
});
// goi features_items
Route::get('/features_items', 'Homecontroller@features_items');

Route::get('/portfolio', function () {
    return view('portfolio');
});

/* Backend */
//Show Dasboard 
Route::get('/dashboard_layout', 'admincontroller@dashboard_layout');
//url
Route::get('/url', 'admincontroller@url');
//Login 
Route::get('/login', 'admincontroller@login');
//test
Route::post('/test', 'admincontroller@test');
//goi logout
Route::get('/logout','admincontroller@logout');

/* Category Product */
Route::get('/add_category_product','Categorycontroller@Add_category_product');

Route::get('/all_category_product','Categorycontroller@All_category_product');