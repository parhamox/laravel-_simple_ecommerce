<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::controller(Authcontroller::class)->group(function() {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.Action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});
/////////////////////register and login  routes///////////////////////////
Route::middleware('auth')->group(function () {

    Route::get('dashboard', function(){
        return view('Auth.dashboard');
    })->name('dashboard');

    Route::get('/Profile', [App\Http\Controllers\Authcontroller::class, 'profile'])->name('profile');

});

Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products.index');
        Route::get('create', 'create')->name('products.create');
        Route::post('/products', 'store')->name('Product.store');

});
/////////////////////Auth and profile routes///////////////////////////
