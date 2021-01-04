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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/accounts', 'accounts@index');
Route::post('/accounts', 'accounts@create');
Route::patch('/accounts', 'accounts@update');
Route::get('/payment', 'payments@index');
Route::post('/payment', 'payments@create');
// Route::patch('/accounts', 'accounts@index');
