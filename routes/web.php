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

Route::get('/', function () {
    return view('ecommerce');
})->name("home");

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


