<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriContorller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelContorller;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserContorller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Database\Seeders\LevelSeeder;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function (){
Route::get('/', [UserController::class, 'index']);
Route::post('/list', [UserController::class, 'list']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/', [UserController::class, 'store']);
Route::get('/{id}', [UserController::class, 'show']);
Route::get('/{id}/edit', [UserController::class, 'edit']);
Route::put('/{id}', [UserController::class, 'update']);
Route::delete('/{id}', [UserController::class, 'destroy']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');


Route::group(['middleware' => ['auth']], function() {

    Route::group(['middleware' => ['cek_login:1']], function() {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleaware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});

});
