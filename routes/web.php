<?php

use App\Http\Livewire\DashboardDonasiPermintaanAsi;
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

Route::get('/', [App\Http\Controllers\welcome::class, 'index'])->name('welcome');
//Route::get('/data-asi', [App\Http\Controllers\AsiProductController::class,'index']);

// Route dashboard taroh disini
Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/data-donasi', \App\Http\Livewire\FindDonation::class)->name('data-donasi');
    //Route::get('/data-donasi-asi/{id}', [App\Http\Controllers\AsiProductController::class,'show'])->name('detailAsi');
    Route::get('/detail-donasi/asi/{asiId}', \App\Http\Livewire\DonateAsi::class)->name('detailAsi');
    Route::post('/detail-resipien-request-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardPendonorRequestAsi'])->name('DetailDashboardPendonor-RequestAsi');
    Route::post('/detail-resipien-histori-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardPendonorHistoriAsi'])->name('DetailDashboardPendonor-HistoriAsi');
    Route::post('/detail-resipien-inprogress-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardPendonorInProgressAsi'])->name('DetailDashboardPendonor-InProgressAsi');
    Route::get('/donasi', \App\Http\Livewire\DashboardDonasi::class)->name('dashboard-donasi-asi'); //hlmn untuk mnmpilkan sttus asiku yg dipesan sama org lain
     Route::get('/donasi-permintaan-asi', DashboardDonasiPermintaanAsi::class); //hlmn untuk mnmpilkan sttus asi yg aku pesan sama org lain

    Route::post('/detail-permintaan-request-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardResipienRequestAsi'])->name('DetailDashboardResipien-RequestAsi');
    Route::post('/detail-permintaan-histori-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardResipienHistoriAsi'])->name('DetailDashboardResipien-HistoriAsi');
    Route::post('/detail-permintaan-inprogress-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardResipienInProgressAsi'])->name('DetailDashboardResipien-InProgressAsi');

    Route::get('/ajukan-bantuan-dana', \App\Http\Livewire\RegisterFund::class)->name('register-fund');

    Route::post('/donasi/detail-resipien-request-asi/proses-request-pendonor', [App\Http\Controllers\AsiProductController::class, 'prosesRequestPendonor'])->name('proses-request-pendonor');
});

Route::middleware(['auth:sanctum', 'verified', \App\Http\Middleware\CheckAdmin::class])->get('/admin', function () {
    return 'admin';
})->name('admin.index');

Route::post('/DataAsi/addasi', [App\Http\Controllers\AsiBoardController::class, 'store'])->name('ProsesPesanAsi');
