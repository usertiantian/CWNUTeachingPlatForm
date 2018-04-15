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
    return view('main');
});

Route::get('/HOME',"mainController@HOME");
Route::get('/login',"mainController@login");


Route::get('/XKGL',"KCGLController@XKGL");

//实验管理（肖勇）
Route::get('/SYGL',"SYGLController@index");
Route::post('/postTest','SYGLController@postTest');
