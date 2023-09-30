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


Route::group(['prefix' => 'admin'], function(){
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/profile', 'admin.profile')->name('admin.profile');
    // Route::view('/manajemen-peminjaman/fasilitas', 'admin.profile')->name('admin.profile');
    // Route::view('/manajemen-konten/fasilitas', 'admin.profile')->name('admin.profile');
});