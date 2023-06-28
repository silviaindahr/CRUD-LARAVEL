<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HijabController;
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

Route::get('/hijab', function () {
    return view('welcome');
});

Route::get('/hijab',[HijabController::class,'index']);
Route::get('/hijab/create',[HijabController::class,'create']);
Route::post('/hijab/store',[HijabController::class,'store']);
Route::get('/hijab/{id}/edit',[HijabController::class,'edit']);
Route::put('/hijab/{id}',[HijabController::class,'update']);
Route::delete('/hijab/{id}',[HijabController::class,'destroy']);

Route::group(['middleware' => 'guest'],function(){
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController:: class, 'registerPost'])->name('register');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/welcome', [HomeController::class, 'welcome']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

