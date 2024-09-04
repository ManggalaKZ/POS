<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::prefix('category')->group(function(){
    Route::get('/food-beverage', [ProductController::class, 'food_beverage']);
    Route::get('/beauty-health', [ProductController::class, 'beauty-health']);
    Route::get('/home-care', [ProductController::class, 'home_care']);
    Route::get('/baby-kid', [ProductController::class, 'baby_kid']);
});

// Route::get('user/{id}/name/{name}', function($id,$name){
//     return UserController::class,
// });

Route::get('/user/{id?}/name/{name?}',[UserController::class,'user']);
Route::get('penjualan',[PenjualanController::class,'penjualan']);