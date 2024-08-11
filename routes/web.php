<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;
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
    return view('index');
});
Route::get('/articles',  [articleController::class, 'index']);

Route::get('/about',  [articleController::class, 'about']);
Route::get('/read/{slug}',  [articleController::class, 'articleRead']);
