<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
})->name('index');





Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/login', [Authcontroller::class, 'Login'])->name('Login');

Route::get('register',[RegisterController::class, 'RegisterShow'])->name('register');

Route::get ('login', [LoginController::class, 'LogInShow'])->name('login');
