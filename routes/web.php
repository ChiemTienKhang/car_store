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

Route::get('/','HomeController@index' );
Route::get('/home','HomeController@index');
Route::get('/get-car','HomeController@index_get_car');
Route::post('/search-car','HomeController@search_car');
Route::get('/car-all','HomeController@car_all');
Route::get('/car-add','HomeController@car_add');
Route::post('/save-car-front','HomeController@save_car_front');
Route::post('/get-car','HomeController@details_car');

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/add-brand','AdminController@add_brand');
Route::post('/save-brand','AdminController@save_brand');
Route::get('/all-brand','AdminController@all_brand');
Route::get('/inactive-brand/{brand_id}','AdminController@inactive_brand');
Route::get('/active-brand/{brand_id}','AdminController@active_brand');
Route::get('/delete-brand/{brand_id}','AdminController@delete_brand');

Route::get('/add-car','AdminController@add_car');
Route::post('/save-car','AdminController@save_car');
Route::get('/all-car','AdminController@all_car');
Route::get('/inactive-car/{car_id}','AdminController@inactive_car');
Route::get('/active-car/{car_id}','AdminController@active_car');
Route::get('/delete-car/{car_id}','AdminController@delete_car');



