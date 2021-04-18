<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::prefix('purchase')->group( function(){
    Route::post('response', 'PurchaseController@responseEpayco');
    Route::get('response', 'PurchaseController@responseEpayco');
    Route::post('confirmation', 'PurchaseController@confirmationEpayco');
});

Route::prefix('auth')->group(function () {
    Route::post('/register', "Auth\LoginController@register");
    Route::post('/login', "Auth\LoginController@login");
});












Route::prefix('product')->group( function(){
    Route::get('type/{slug}/{page}', 'ProductTypeController@getRecords');
});
