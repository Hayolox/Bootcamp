<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuccesController;
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
Route::get('/Login', [AuthController::class, 'index'])->name('login-user');
Route::get('/Checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/Succes', [SuccesController::class, 'index'])->name('succes');

Auth::routes();


