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
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('enemys','EnemyController@index')->name('admin.enemys');
    Route::get('heroes','HeroController@index')->name('admin.heroes');
    Route::get('items','ItemController@index')->name('admin.items');
});

