<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SeatController;
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
Route::prefix('/admin')->group(function (){
    Route::get('/', function (){return view('backend.index');})->name('backend.index');



});
Route::get('auto', function (){
    return view('autoBanner');
});

Route::get('home', function (){
    return view('home');
});

Route::prefix('seats')->group(function (){
    Route::get('/', [SeatController::class, 'getAll'])->name('seat.index');
    Route::get('create', [SeatController::class, 'showFormCreate'])->name('seat.showFormCreate');
    Route::post('create', [SeatController::class, 'create'])->name('seat.create');
    Route::get('{id}/edit', [SeatController::class, 'edit'])->name('seat.edit');
    Route::post('{id}/update', [SeatController::class, 'update'])->name('seat.update');
    Route::get('{id}/delete', [SeatController::class, 'delete'])->name('seat.delete');

});

Route::prefix('roles')->group(function (){
    Route::get('/',[RoleController::class, 'getAll'])->name('role.index');
    Route::get('/{id}/delete',[RoleController::class, 'deleteById'])->name('role.delete');
    Route::get('create', [RoleController::class, 'showFormCreate'])->name('role.showFormCreate');
    Route::post('create', [RoleController::class, 'create'])->name('role.create');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/{id}/update', [RoleController::class, 'update'])->name('role.update');

});




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
        Route::get('/{id}/edit',[FlightController::class,'edit'])->name('flights.edit');
        Route::post('/{id}/edit',[FlightController::class,'update'])->name('flights.update');

    });
});
