<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
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
Route::prefix('roles')->group(function (){
    Route::get('/',[RoleController::class, 'getAll'])->name('role.index');
    Route::get('/{id}/delete',[RoleController::class, 'deleteById'])->name('role.delete');
    Route::get('create', [RoleController::class, 'showFormCreate'])->name('role.showFormCreate');
    Route::post('create', [RoleController::class, 'create'])->name('role.create');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/{id}/update', [RoleController::class, 'update'])->name('role.update');

});


Route::get('/', function () {
    return view('backend.dashboard');
})->name('dashboard')->middleware('checkAuth');

Route::get('/login',[AuthController::class,'showLogin'])->name('showLogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'showRegister'])->name('showRegister');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('checkAuth')->group(function (){
    Route::prefix('users')->group(function (){
        Route::get('/',[UserController::class,'getAll'])->name('users.list');
    });
});

