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

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    
    Route::resource('item','ItemController');
    Route::resource('heroes','HeroController');
    Route::resource('enemy','EnemyController');
    Route::get('bs','BSController@index')->name('admin.bs');
    
});

