<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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




//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categories', function () {
    return view('categoriPage.categories');
});
Route::get('/categori', function () {
    return view('categoriPage.categori');
});
Route::get('/detailcategori', function () {
    return view('categoriPage.detailkategori');
});
Route::get('/detail', function () {
    return view('produkPage.detailproduk');
});

// test Update Profile
Route::match(['GET', 'POST'], '/update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
Route::GET('/profile', [ProfileController::class, 'profileView'])->name('profile')->middleware('auth');
Route::GET('/address', [ProfileController::class, 'addressView'])->name('address')->middleware('auth');


//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/ceklogin', [LoginController::class, 'login'])->name('ceklogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
