<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\Http\Controllers\FrontController::class, 'home']);
Route::get('/agendamentos',[\App\Http\Controllers\FrontController::class, 'appointments']);
Route::get('/seguindo',[\App\Http\Controllers\FrontController::class, 'following']);
Route::get('/compras',[\App\Http\Controllers\FrontController::class, 'purchases']);
Route::get('/perfil',[\App\Http\Controllers\FrontController::class, 'profile']);
Route::get('/login',[\App\Http\Controllers\FrontController::class, 'login']);
Route::get('/register',[\App\Http\Controllers\FrontController::class, 'register']);



Route::prefix('dashboard')->group(function () {
    Route::get('/',[\App\Http\Controllers\AddressController::class, 'index']);
    Route::post('/',[\App\Http\Controllers\AddressController::class, 'index']);
});

