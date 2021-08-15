<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;





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


Route::group(['prefix' => "index"], function() {
    Route::get('/get-categories', [MenuController::class, 'getCategories']);
});


Route::group(['prefix' => "carrito"], function() {
    Route::get('/', [CartController::class, 'index'])->name('cartIndex');
    Route::get('/agregar/{articulo}', [CartController::class, 'addItem']);
    Route::get('/get-cart', [CartController::class, 'get'])->name('getCart');
    Route::get('/delete-item/{itemIndex}', [CartController::class, 'deleteItemCart']);

});

Route::get("/categories/{idCategory}", [CategoryController::class, 'index']);
Route::get("/categories/get-items", [CategoryController::class, 'getItemsCategory']);


