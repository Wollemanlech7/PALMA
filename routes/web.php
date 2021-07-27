<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;




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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/product/{productId}', [ProductController::class, 'show']);
   

Route::get('/prueba', [SaleController::class, 'index']);

Route::get('/', [MenuController::class, 'menuProducts']);




Route::group(['prefix' => "carrito"], function() {
    Route::get('/', [CartController::class, 'index'])->name('cartIndex');
    Route::get('/agregar/{articulo}', [CartController::class, 'addItem']);
    Route::get('/view', [CartController::class, 'viewItem']);
});

