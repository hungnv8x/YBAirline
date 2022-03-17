<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\IndexController;
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

Route::get('/',[IndexController::class,'getAll'])->name('dashboard')->middleware('checkAuth');

Route::get('/login',[AuthController::class,'showLogin'])->name('showLogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'showRegister'])->name('showRegister');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('checkAuth')->group(function (){
    Route::prefix('users')->group(function (){
        Route::get('/',[UserController::class,'getAll'])->name('users.list');
        Route::get('/{id}/delete',[UserController::class,'deleteById'])->name('users.delete');
        Route::get('/{id}/edit',[UserController::class,'edit'])->name('users.edit');
        Route::post('/{id}/edit',[UserController::class,'update'])->name('users.update');
        Route::get('/create',[UserController::class,'showCreate'])->name('users.showCreate');
        Route::post('/create',[UserController::class,'create'])->name('users.create');
    });
});
Route::middleware('checkAuth')->group(function (){
    Route::prefix('flights')->group(function (){
        Route::get('/',[FlightController::class,'getAll'])->name('flights.list');
        Route::get('/create',[FlightController::class,'showCreate'])->name('flights.showCreate');
        Route::post('/create',[FlightController::class,'create'])->name('flights.create');
        Route::get('/{id}/delete',[FlightController::class,'deleteById'])->name('flights.delete');
    });
});
