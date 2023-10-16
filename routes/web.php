<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// Route::get('/indexpage',function(){
//     return view('indexpage');
// });
Route::get('indexpage',[AuthController::class,'indexpagecall'])->middleware('login');
Route::post('loginstore',[AuthController::class,'loginstore']);
Route::resource('category',CategoryController::class)->middleware('login');
Route::resource('sub-category',SubcategoryController::class)->middleware('login');
Route::resource('product',ProductController::class)->middleware('login');
Route::resource('vendor_data',VendorController::class)->middleware('login');
Route::get('logout',[AuthController::class,'logout']);
Route::get('vendor_profile',[VendorController::class,'vendor_profile']);
Route::get('visitor_details',[RegisterController::class,'index']);
Route::resource('visitor',RegisterController::class)->middleware('login');