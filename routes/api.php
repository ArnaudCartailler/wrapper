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

Route::group([

    'middleware' => 'api',
    'prefix' => 'summoner'

], function () {

    /* GET */
    Route::get('show/{summoner_name}', 'SummonerController@show')->middleware("summoner");

    Route::get('toto/{summoner_crypt}', 'SummonerController@toto')->middleware("summoner");

});