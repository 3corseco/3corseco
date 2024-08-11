<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\DB;
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
    $data['product_cate'] = DB::table("tbl_product_categories")->orderBy("created_at")->get();
    return view('index', $data);
});
Route::get('/articles',  [articleController::class, 'index']);

Route::get('/about',  [articleController::class, 'about']);
Route::get('/read/{slug}',  [articleController::class, 'articleRead']);
Route::get('/read/{slug}',  [articleController::class, 'articleRead']);
Route::get('/products',  [productController::class, 'index']);
