<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', 'ShopController@shop');
Route::get('/shop/creator', 'ShopController@earringCreator');

Route::get('/involvement', 'InvolvementController@involvement');
Route::get('/crew', 'CrewController@crew');
Route::get('/home', 'HomeController@index');


Auth::routes();
