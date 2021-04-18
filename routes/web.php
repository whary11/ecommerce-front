<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home')->name("home");

Route::get('chat/{any?}',  function () {
    return view('chat');
})->where('any', '^(?!api\/)[\/\w\.-]*');

// Rutas para productos
Route::prefix('product')->group(function () {
    Route::get('/detail/{slug}', "ProductController@detail");
});

// Rutas para la compra
Route::prefix('purchase')->group(function () {
    Route::get('/checkout', "PurchaseController@checkout");
});

// Rutas para la compra

Route::get('/register', "Auth\LoginController@index_register");
Route::get('/login', "Auth\LoginController@index_login");


// Route::prefix('api/auth')->group(function () {
//     Route::post('/register', "Auth\LoginController@register");
//     Route::post('/login', "Auth\LoginController@login");

// });

Route::prefix('api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/register', "Auth\LoginController@register");
        Route::post('/login', "Auth\LoginController@login");
    
    });
    // Route::prefix('users')->group(function () {
    //     Route::get('/get_info', "UserController@getInfo");
    // });

    Route::prefix('purchase')->group( function(){
        Route::post('create', 'PurchaseController@create');
    });

});


