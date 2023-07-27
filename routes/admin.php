<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('admin','AdminController@index');


Route::group(['prefix'=>'admin', 'middleware' =>'admin_auth'],function(){
    //Route::view('/','Admin.login');
    Route::get('login', 'AdminController@login')->name('admin_login');
    Route::view('/dashboard', 'Admin.dashboard');
});

Route::match(['get', 'post'],'admin/authenticate', 'AdminController@authenticate');
