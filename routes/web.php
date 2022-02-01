<?php

use App\Http\Controllers\CheackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\ThankYouController;
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

Route::get('/', [LandingPageController::class,'index'])->name('landingpage');
Route::post('/storedata', [LandingPageController::class,'store'])->name('storedata');
Route::get('/checkout', [CheackController::class,'index'])->name('cheackout');
Route::post('/checkout/store', [CheackController::class,'store'])->name('checkout.store');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/statistic', [DashboardController::class,'statistic'])->name('statistic');
Route::get('/comment', [DashboardController::class,'comment'])->name('comment');
Route::get('/thankYou', [ThankYouController::class,'index'])->name('thankyou');
Route::get('/generate-qrcode', [QrCodeController::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
