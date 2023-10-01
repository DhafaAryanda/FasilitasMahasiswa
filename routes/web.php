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
    
    Route::view('/manajemen-konten/fasilitas-gelanggang', 'admin.profile')->name('admin.profile');
    Route::view('/manajemen-konten/kesenian-dan-alat', 'admin.profile')->name('admin.profile');

    Route::group(['prefix' => 'manajemen-peminjaman'], function() {
        Route::view('/fasilitas-gelanggang', 'admin.manajemen-peminjaman.fasilitas-gelanggang')->name('admin.manajemen-peminjaman.fasilitas-gelanggang');
        Route::view('/kesenian-dan-alat', 'admin.manajemen-peminjaman.kesenian-dan-alat')->name('admin.manajemen-peminjaman.kesenian-dan-alat');
    });

    Route::group(['prefix' => 'manajemen-konten'], function() {
        Route::view('/fasilitas-gelanggang', 'admin.manajemen-konten.fasilitas-gelanggang')->name('admin.manajemen-konten.fasilitas-gelanggang');
        Route::view('/kesenian-dan-alat', 'admin.manajemen-konten.kesenian-dan-alat')->name('admin.manajemen-peminjaman.konten-dan-alat');
    });
});