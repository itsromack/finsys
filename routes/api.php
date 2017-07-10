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

// Client
Route::group([
    'prefix' => 'client'
], function() {
    Route::get('list', 'ClientsController@api_list');
    Route::get('{id}', 'ClientsController@api_get');
    Route::post('new', 'ClientsController@api_new');
    Route::post('update', 'ClientsController@api_update');
});

// Statement of Accounts
Route::group([
    'prefix' => 'sa'
], function() {
    Route::get('list', 'SAController@api_list');
    Route::get('{id}', 'SAController@api_get');
    Route::post('new', 'SAController@api_new');
    Route::post('update', 'SAController@api_update');
});

// Purchase Orders
Route::group([
    'prefix' => 'po'
], function() {
    Route::get('list', 'POController@api_list');
    Route::get('{id}', 'POController@api_get');
    Route::post('new', 'POController@api_new');
    Route::post('update', 'POController@api_update');
});
