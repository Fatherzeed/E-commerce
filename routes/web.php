<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

// Testing Route
Route::get('/testhome', function() {
    return view('home.testhome');
});

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categories', function() {
    return view('home.categories');
});


//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/ceklogin', [LoginController::class, 'login'])->name('ceklogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


