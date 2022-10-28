<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ShopController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'shop', 'as' => 'shop.'], function (){
    Route::get('product/{id}', [ShopController::class, 'show'])->name('product.show');
    Route::post('product/{id}', [ShopController::class, 'postComment']);
    Route::get('', [ShopController::class, 'index'])->name('index');
    Route::get('category/{categoryName}', [ShopController::class, 'category'])->name('category.show');
});

