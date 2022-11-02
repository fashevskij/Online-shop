<?php

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
Route::get("/categories", [CategoryController::class, 'getCategories']);
Route::get("/category/{slug}", [CategoryController::class, 'getCategory']);
Route::get("/products", [ProductController::class, 'getProducts']);
Route::get("/product/{slug}", [ProductController::class, 'getProductItems']);
