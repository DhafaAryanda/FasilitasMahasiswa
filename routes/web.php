<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\ManajemenKontenController;
use App\Http\Controllers\Admin\ManajemenPeminjamanController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TransactionHistoryController;
use App\Http\Controllers\Admin\CreateTransactionController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Member\RegisterController;
use App\Http\Controllers\Member\LoginController as MemberLoginController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\FacilityController;
use App\Http\Controllers\Member\ProfileController;
use App\Http\Controllers\Member\TransactionController as MemberTransactionController;
use App\Http\Controllers\Member\InvoiceController;








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

// Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
// Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

// Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('/monthly-income', [TransactionController::class, 'monthlyIncome'])->name('admin.monthly.income');





//     Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
//     Route::view('/profile', 'admin.profile')->name('admin.profile');
    
//     Route::group(['prefix' => 'manajemen'], function() {

//         Route::group(['prefix' => 'konten'], function() {

//             Route::group(['prefix' => 'facility'], function() {
//                 Route::get('/', [ManajemenKontenController::class, 'index'])->name('admin.manajemen.konten.facility');
//                 Route::get('/create', [ManajemenKontenController::class, 'create'])->name('admin.manajemen.konten.facility.create');
//                 Route::post('/store', [ManajemenKontenController::class, 'store'])->name('admin.manajemen.konten.facility.store');
//                 Route::get('/edit/{id}', [ManajemenKontenController::class, 'edit'])->name('admin.manajemen.konten.facility.edit');
//                 Route::put('/update/{id}', [ManajemenKontenController::class, 'update'])->name('admin.manajemen.konten.facility.update');
//                 Route::delete('/destroy/{id}', [ManajemenKontenController::class, 'destroy'])->name('admin.manajemen.konten.facility.destroy');
                
//             });
//         });

//         Route::group(['prefix' => 'sewa'], function() {
            
//             Route::group(['prefix' => 'facility'], function() {
//                 Route::get('/', [TransactionController::class, 'index'])->name('admin.manajemen.sewa.facility');
//                 Route::get('/{id}', [TransactionController::class, 'show'])->name('admin.manajemen.sewa.facility.detail');
//                 Route::put('/{id}/confirm', [TransactionController::class, 'confirm'])->name('admin.manajemen.sewa.facility.confirm');
//                 Route::post('/{id}/reject', [TransactionController::class, 'reject'])->name('admin.manajemen.sewa.facility.reject');

//             });
            
//         });

//         Route::group(['prefix' => 'riwayat-transaksi'], function() {
//             Route::get('/', [TransactionHistoryController::class, 'index'])->name('admin.manajemen.history');
//             Route::get('/detail/{id}', [TransactionHistoryController::class, 'show'])->name('admin.manajemen.history.detail');
//             Route::get('/generate-pdf/{transactionId}', [TransactionHistoryController::class, 'generatePDF'])->name('admin.manajemen.history.generate.pdf');
//             Route::get('/generate-pdf-guest/{guestTransactionId}', [TransactionHistoryController::class, 'generateGuestTransactionPDF'])->name('admin.manajemen.history.generate.guest.pdf');
//             Route::get('/transaction-export', [TransactionHistoryController::class, 'export'])->name('admin.manajemen.history.export');


//         });

//         Route::group(['prefix' => 'buat-transaksi'], function() {
//             Route::get('/', [CreateTransactionController::class, 'index'])->name('admin.manajemen.create.transaction');
//             Route::post('/store', [CreateTransactionController::class, 'store'])->name('admin.manajemen.create.transaction.store');
//             Route::get('/transaction-confirm', [CreateTransactionController::class, 'confirm'])->name('admin.manajemen.create.transaction.confirm');
//             Route::post('/transaction-confirm', [CreateTransactionController::class, 'confirmStore'])->name('admin.manajemen.create.transaction.confirm.store');
//         });



//         Route::get('/transaction-confirm/{id}', [MemberTransactionController::class, 'confirm'])->name('member.transaction.confirm');


//     });
// });

// Route::group(['prefix' => 'member', 'middleware' => ['member.auth']],  function(){
//     Route::get('/', [MemberDashboardController::class, 'index'])->name('member.dashboard');
//     Route::get('logout', [MemberLoginController::class, 'logout'])->name('member.logout');
//     Route::get('/profile', [ProfileController::class, 'index'])->name('member.profile');
//     Route::get('/profile/generate-pdf/{transactionId}', [ProfileController::class, 'generatePDF'])->name('member.profile.generate.pdf');
   

//     Route::group(['prefix' => 'konten'], function() {
//       Route::group(['prefix' => 'facility'], function() {
//           Route::get('/', [FacilityController::class, 'index'])->name('member.konten.facility');
//           Route::get('/semua', [FacilityController::class, 'showAll'])->name('member.konten.facility.all');
//           Route::get('/{id}', [FacilityController::class, 'show'])->name('member.konten.facility.detail');

//       });
//     });
//     Route::group(['prefix' => 'sewa'], function() {
//       Route::get('/{id}', [MemberTransactionController::class, 'index'])->name('member.transaction');
//       Route::post('/{id}', [MemberTransactionController::class, 'store'])->name('member.transaction.store');
//     //   Route::get('/{id}/{targetDateTime}', [MemberTransactionController::class, 'show'])->name('member.transaction.show.schedule');
//       Route::get('/transaction-confirm/{id}', [MemberTransactionController::class, 'confirm'])->name('member.transaction.confirm');
//       Route::post('/transaction-confirm/{id}', [MemberTransactionController::class, 'confirmStore'])->name('member.transaction.confirm.store');

//     });    
// });


Route::get('/register', [RegisterController::class, 'index'])->name('member.register');
Route::post('/register', [RegisterController::class, 'store'])->name('member.register.store');


Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login'])->name('member.login.auth');

});

// Route::get('/home', function() {
//     return redirect('/admin');
// });
Route::prefix('admin')->middleware(['auth', 'UserAccess:admin'])->group(function(){
    // Add other routes specific to the 'admin' role here
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/monthly-income', [TransactionController::class, 'monthlyIncome'])->name('admin.monthly.income');
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

        Route::group(['prefix' => 'sewa'], function() {        
            Route::group(['prefix' => 'facility'], function() {
                Route::get('/', [TransactionController::class, 'index'])->name('admin.manajemen.sewa.facility');
                Route::get('/{id}', [TransactionController::class, 'show'])->name('admin.manajemen.sewa.facility.detail');
                Route::put('/{id}/confirm', [TransactionController::class, 'confirm'])->name('admin.manajemen.sewa.facility.confirm');
                Route::post('/{id}/reject', [TransactionController::class, 'reject'])->name('admin.manajemen.sewa.facility.reject');
            });
        });

        Route::group(['prefix' => 'riwayat-transaksi'], function() {
            Route::get('/', [TransactionHistoryController::class, 'index'])->name('admin.manajemen.history');
            Route::get('/detail/{id}', [TransactionHistoryController::class, 'show'])->name('admin.manajemen.history.detail');
            Route::get('/generate-pdf/{transactionId}', [TransactionHistoryController::class, 'generatePDF'])->name('admin.manajemen.history.generate.pdf');
            Route::get('/generate-pdf-guest/{guestTransactionId}', [TransactionHistoryController::class, 'generateGuestTransactionPDF'])->name('admin.manajemen.history.generate.guest.pdf');
            Route::get('/transaction-export', [TransactionHistoryController::class, 'export'])->name('admin.manajemen.history.export');
        });

        Route::group(['prefix' => 'buat-transaksi'], function() {
            Route::get('/', [CreateTransactionController::class, 'index'])->name('admin.manajemen.create.transaction');
            Route::post('/store', [CreateTransactionController::class, 'store'])->name('admin.manajemen.create.transaction.store');
            Route::get('/transaction-confirm', [CreateTransactionController::class, 'confirm'])->name('admin.manajemen.create.transaction.confirm');
            Route::post('/transaction-confirm', [CreateTransactionController::class, 'confirmStore'])->name('admin.manajemen.create.transaction.confirm.store');
        });

        Route::get('/transaction-confirm/{id}', [MemberTransactionController::class, 'confirm'])->name('member.transaction.confirm');


    });
});

Route::prefix('operator')->middleware(['auth', 'UserAccess:operator'])->group(function(){
    Route::get('/', [RoleController::class, 'operator']);
    // Add other routes specific to the 'operator' role here
});

Route::prefix('mhs')->middleware(['auth', 'UserAccess:mahasiswa'])->group(function(){
    Route::get('/', [RoleController::class, 'mahasiswa']);
    // Add other routes specific to the 'mahasiswa' role here
});

Route::prefix('umum')->middleware(['auth', 'UserAccess:umum'])->group(function(){    
    Route::get('/', [MemberDashboardController::class, 'index'])->name('member.dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('member.profile');
    Route::get('/profile/generate-pdf/{transactionId}', [ProfileController::class, 'generatePDF'])->name('member.profile.generate.pdf');
   
    Route::group(['prefix' => 'konten'], function() {
      Route::group(['prefix' => 'facility'], function() {
          Route::get('/', [FacilityController::class, 'index'])->name('member.konten.facility');
          Route::get('/semua', [FacilityController::class, 'showAll'])->name('member.konten.facility.all');
          Route::get('/{id}', [FacilityController::class, 'show'])->name('member.konten.facility.detail');

      });
    });

    Route::group(['prefix' => 'sewa'], function() {
      Route::get('/{id}', [MemberTransactionController::class, 'index'])->name('member.transaction');
      Route::post('/{id}', [MemberTransactionController::class, 'store'])->name('member.transaction.store');
      Route::get('/transaction-confirm/{id}', [MemberTransactionController::class, 'confirm'])->name('member.transaction.confirm');
      Route::post('/transaction-confirm/{id}', [MemberTransactionController::class, 'confirmStore'])->name('member.transaction.confirm.store');
    });    
    
});

Route::get('/logout', [SessionController::class, 'logout'])->middleware('auth')->name('logout');


// Route::middleware(['auth'])->group(function(){
//     Route::get('/admin', [RoleController::class, 'admin'])->middleware('UserAccess:admin');
//     Route::get('/operator', [RoleController::class, 'operator'])->middleware('UserAccess:operator');
//     Route::get('/mahasiswa', [RoleController::class, 'mahasiswa'])->middleware('UserAccess:mahasiswa');
//     Route::get('/umum', [RoleController::class, 'umum'])->middleware('UserAccess:umum');
//     Route::get('/logout', [SessionController::class, 'logout']);
    
// });


Route::get('/invoice', [InvoiceController::class, 'generatePDF'])->name('member.invoice');


// Route::group(['prefix' => 'member'], function() {
    
// });


// Route::view('/dashboard', 'member.dashboard')->name('member.dashboard');
// Route::view('/profile', 'member.profile')->name('member.profile');  
// Route::view('/fasilitas-gelanggang', 'member.fasilitas-gelanggang')->name('member.fasilitas-gelanggang');
// Route::view('/kesenian-&alat-olahraga', 'member.kesenian-dan-alat-olahraga')->name('member.kesenian-dan-alat-olahraga');
// Route::view('/login', 'member.auth')->name('member.auth');




