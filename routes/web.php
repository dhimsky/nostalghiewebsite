<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasiControllerAdmin;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PaketAdminController;
use App\Http\Controllers\CustomerReservController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\OwnerReservasiController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/promosi', function () {
    return view('promo');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// });

// Route::get('/users', function () {
//     return view('admin.users.index');
// });

// Route::get('/reservation', function () {
//     return view('admin.reservasi.index');
// });

// Route::get('/paket', function () {
//     return view('admin.paket.index');
// });

// Route::get('/promosi', function () {
//     return view('promo');
// });

// Route::get('reservasi', function () {
//     return view('reservasi.prewedding');
// });

Route::prefix('package')->group(function () {
    Route::get('/prewedding', function () {
        return view('detail-product.prewedding');
    });
});

Route::resource('reserv', CustomerReservController::class);



Route::get('/', [SessionController::class, 'index']);
Route::post('login', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);
Route::get('register', [SessionController::class, 'register']);
Route::post('register', [SessionController::class, 'create']);
Route::resource('reservasi', ReservasiControllerAdmin::class);
Route::get('/reservasi/search', [ReservasiControllerAdmin::class, 'search'])->name('reservasi.search');
Route::resource('promo', PromoController::class);
Route::resource('paket', PaketAdminController::class);
Route::resource('dashboard', DashboardController::class);

Route::get('/users', function () {
    return view('admin.users.index');
});
Route::resource('users', UserController::class);

//PDF
Route::get('/reservasiexportpdf', [PdfController::class, 'reservasiexportpdf'])->name('reservasiexportpdf');
Route::get('/paketexportpdf', [PdfController::class, 'paketexportpdf'])->name('paketexportpdf');
Route::get('/promoexportpdf', [PdfController::class, 'promoexportpdf'])->name('promoexportpdf');
Route::get('/userexportpdf', [PdfController::class, 'userexportpdf'])->name('userexportpdf');

// Route::resource('owner/reservasi', OwnerReservasiController::class);