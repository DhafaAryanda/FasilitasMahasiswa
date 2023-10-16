<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManajemenKontenController;
use App\Http\Controllers\Admin\ManajemenPeminjamanController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\LoginController;



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






    // Route::view('/manajemen-konten/fasilitas-gelanggang', 'admin.profile')->name('admin.profile');
    // Route::view('/manajemen-konten/kesenian-dan-alat', 'admin.profile')->name('admin.profile');

    // Route::group(['prefix' => 'manajemen-peminjaman'], function() {
    //     Route::view('/fasilitas-gelanggang', 'admin.manajemen-peminjaman.fasilitas-gelanggang')->name('admin.manajemen-peminjaman.fasilitas-gelanggang');
    //     Route::view('/kesenian-dan-alat', 'admin.manajemen-peminjaman.kesenian-dan-alat')->name('admin.manajemen-peminjaman.kesenian-dan-alat');
    // });

    // Route::group(['prefix' => 'manajemen-konten'], function() {
    //     Route::view('/fasilitas-gelanggang', 'admin.manajemen-konten.fasilitas-gelanggang')->name('admin.manajemen-konten.fasilitas-gelanggang');
    //     Route::view('/add-fasilitas-gelanggang', 'admin.manajemen-konten.add-fasilitas-gelanggang')->name('admin.manajemen-konten.add-fasilitas-gelanggang');
    //     Route::view('/edit-fasilitas-gelanggang', 'admin.manajemen-konten.edit-fasilitas-gelanggang')->name('admin.manajemen-konten.edit-fasilitas-gelanggang');
    //     Route::view('/kesenian-dan-alat', 'admin.manajemen-konten.kesenian-dan-alat')->name('admin.manajemen-peminjaman.konten-dan-alat');
    //     Route::view('/add-kesenian-dan-alat', 'admin.manajemen-konten.add-kesenian-dan-alat')->name('admin.manajemen-konten.add-kesenian-dan-alat');
    //     Route::view('/edit-kesenian-dan-alat', 'admin.manajemen-konten.edit-kesenian-dan-alat')->name('admin.manajemen-konten.edit-kesenian-dan-alat');

    // });
});

Route::view('/dashboard', 'member.dashboard')->name('member.dashboard');
Route::view('/profile', 'member.profile')->name('member.profile');
Route::view('/fasilitas-gelanggang', 'member.fasilitas-gelanggang')->name('member.fasilitas-gelanggang');
Route::view('/kesenian-&alat-olahraga', 'member.kesenian-dan-alat-olahraga')->name('member.kesenian-dan-alat-olahraga');
Route::view('/login', 'member.auth')->name('member.auth');




