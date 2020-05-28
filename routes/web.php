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

/*Route::get('/', 'TestController@test');
Route::get('/test', 'TestController@test');*/

// 登入畫面
Route::get('/', 'indexController@index');
Route::get('/index', 'indexController@index');

// 帳密處理程序
Route::group(['prefix' => 'login'], function() {
    Route::get('/create', 'loginController@create');
    Route::post('/create_process', 'loginController@createProcess');
    Route::post('/login_process', 'loginController@loginProcess');
});

// 進入日記系統
Route::group(['prefix' => 'diary'], function() {
    Route::get('/index', 'diaryController@index');
});
