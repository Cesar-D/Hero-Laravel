<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/','ApiController@index');
Route::get('heroes','ApiController@getAllHeroes');
Route::get('heroes/{id}','ApiController@getHero');
Route::get('enemys','ApiController@getAllEnemy');
Route::get('enemys/{id}','ApiController@getEnemy');
Route::get('items','ApiController@getAllItems');
Route::get('items/{id}','ApiController@getItem');
Route::get('bs/{heroId}/{enemyId}','ApiController@runManualBS');
