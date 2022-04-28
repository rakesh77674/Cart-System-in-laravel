<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::get('/',[HomeController::class, 'index'])->name('/');
Route::get('/signUpIndex',[UserController::class, 'getsignUp'])->name('/signUpIndex');
Route::post('/Signup',[UserController::class, 'signup'])->name('/Signup');
Route::get('/add-to-cart/{id}', [HomeController::class, 'getAddToCart'])->name('product.addToCart');
Route::get('/shopping-cart', [HomeController::class, 'getshoppingCart'])->name('product.shoppingCart');
