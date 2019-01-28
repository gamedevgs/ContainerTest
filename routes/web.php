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
    return view('welcome');
});
Route::get('add','Containercontroller@GetAdd');

Route::get('/request',function ()
{
   if(Request::ajax()){
    return "some data";
   }
});

Route::get('/receving/{number}','Containercontroller@Getreceving');
Route::post('addvalue','Containercontroller@Addvalure');
Route::get('/show','Containercontroller@Show');
Route::get('getid/{id}','Containercontroller@Getid');
Route::get('/item','ItemController@Getjs');
