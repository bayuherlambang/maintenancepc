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

Route::get('workstation', 'WorkstationController@index');
Route::get('workstation/{id}', 'WorkstationController@show');
Route::post('workstation', 'WorkstationController@store');
Route::put('workstation/{id}', 'WorkstationController@update');
Route::delete('workstation/{id}', 'WorkstationController@delete');

Route::get('maintenance', 'DailyMaintenanceController@index');
Route::get('maintenance/{date}', 'DailyMaintenanceController@show');
Route::post('maintenance', 'DailyMaintenanceController@store');
Route::put('maintenance/{id}', 'DailyMaintenanceController@update');
Route::delete('maintenance/{id}', 'DailyMaintenanceController@delete');
