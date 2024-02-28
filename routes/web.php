<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class , "loginPage"]);

Route::get('/tiktok/redirect', [AuthController::class , "redirectTikTokPage"])->name("tiktok");

Route::get('/tiktok/callback', [AuthController::class , "handleTikTokCallback"]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
