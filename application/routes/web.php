<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', static function () {
    return view('app');
});

Route::get('/home', static function () {
    return view('index');
});

Route::get('/shop', static function () {
    return view('shop');
});

Route::get('/contact', static function () {
    return view('contact');
});

Route::get('/ms-polymer', static function () {
    return view('detail');
});

Route::get('/test', static function () {
    return view('test');
});

Route::get("/categories", [CategoryController::class, 'getCategories']);
Route::get("/category/{slug}", [CategoryController::class, 'getCategory']);
Route::get("/products", [ProductController::class, 'getProducts']);
Route::get("/test", [CardController::class, 'getProduct']);
Route::get("/product/{slug}", [ProductController::class, 'getProductItems']);
