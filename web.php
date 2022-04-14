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

Route::get('/', function () {
    return view('login');
});
/*Route::get('list','User@list');*/
Route::get('/list',function(){
    return view('Userlist');
});
Route::get('/Create',function(){
    return view('create');
});
/*Route::post('/loginsubmit',function(){
    return view('Userloginsubmit');
});*/
Route::get('/loginsubmit',[Usercontroller::class,'loginsubmit']);
Route::view('/layout22','layout22');