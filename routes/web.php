<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductdetailsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
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

Route::get('/',[ProductController::class ,'index'])->name('home');
Route::post('logout', [SessionController::class, 'destroy']);
Route::resource('login',SessionController::class);
Route::resource('register',RegisterController::class)->middleware('guest');
Route::resource('add_category',CategoryController::class)->middleware('Permission');//change this middleware
Route::resource('add_product',ProductController::class)->middleware('Permission');
Route::resource('add_user',UserController::class)->middleware('Permission');
Route::resource('category_chioce',UserController::class)->middleware('guest');
Route::resource('product_details' ,ProductdetailsController::class);





