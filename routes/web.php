<?php

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

Route::get('/', function () {
    return redirect()->route('Dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('Login');

Route::get('/profile', function () {
    return view('auth.profile');
})->name('Profile');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('Dashboard');


Route::get('/diklat', function () {
    return view('main-pages.diklat');
})->name('Diklat');

Route::get('/diklat/tambah', function () {
    return view('main-pages.tambah-diklat');
})->name('Tambah Diklat');

Route::get('/diklat/result', function () {
    return view('main-pages.diklat-result');
})->name('Diklat Result');


Route::get('/pengembangan', function () {
    return view('main-pages.pengembangan');
})->name('Pengembangan');

Route::get('/pengembangan/tambah', function () {
    return view('main-pages.tambah-pengembangan');
})->name('Tambah Pengembangan');

Route::get('/pengembangan/result', function () {
    return view('main-pages.pengembangan-result');
})->name('Pengembangan Result');