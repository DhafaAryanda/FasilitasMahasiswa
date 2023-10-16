<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManajemenKontenController;
use App\Http\Controllers\Admin\ManajemenPeminjamanController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Member\RegisterController;



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

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');

    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::view('/profile', 'admin.profile')->name('admin.profile');
    
    Route::group(['prefix' => 'manajemen'], function() {

        Route::group(['prefix' => 'konten'], function() {

            Route::group(['prefix' => 'facility'], function() {
                Route::get('/', [ManajemenKontenController::class, 'index'])->name('admin.manajemen.konten.facility');
                Route::get('/create', [ManajemenKontenController::class, 'create'])->name('admin.manajemen.konten.facility.create');
                Route::post('/store', [ManajemenKontenController::class, 'store'])->name('admin.manajemen.konten.facility.store');
                Route::get('/edit/{id}', [ManajemenKontenController::class, 'edit'])->name('admin.manajemen.konten.facility.edit');
                Route::put('/update/{id}', [ManajemenKontenController::class, 'update'])->name('admin.manajemen.konten.facility.update');
                Route::delete('/destroy/{id}', [ManajemenKontenController::class, 'destroy'])->name('admin.manajemen.konten.facility.destroy');
                
            });
        });

        Route::group(['prefix' => 'peminjaman'], function() {
            
            Route::group(['prefix' => 'facility'], function() {
                Route::get('/', [TransactionController::class, 'index'])->name('admin.manajemen.peminjaman.facility');

            });
            
        });

    });
});

Route::get('/register', [RegisterController::class, 'index'])->name('member.register');
Route::post('/register', [RegisterController::class, 'store'])->name('member.register.store');


Route::view('/dashboard', 'member.dashboard')->name('member.dashboard');
Route::view('/profile', 'member.profile')->name('member.profile');
Route::view('/fasilitas-gelanggang', 'member.fasilitas-gelanggang')->name('member.fasilitas-gelanggang');
Route::view('/kesenian-&alat-olahraga', 'member.kesenian-dan-alat-olahraga')->name('member.kesenian-dan-alat-olahraga');
Route::view('/login', 'member.auth')->name('member.auth');




