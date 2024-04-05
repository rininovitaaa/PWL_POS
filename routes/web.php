<?php

use App\Http\Controllers\KategoriContorller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelContorller;
use App\Http\Controllers\LevelController;
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

});
