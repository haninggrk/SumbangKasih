<?php

use App\Http\Controllers\MessageController;
use App\Http\Livewire\Messages;
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
    Route::get('/detail-resipien-request-asi/{idasiboard}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardPendonorRequestAsi'])->name('DetailDashboardPendonor-RequestAsi');

    Route::post('/detail-resipien-histori-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardPendonorHistoriAsi'])->name('DetailDashboardPendonor-HistoriAsi');
    Route::get('/detail-resipien-inprogress-asi/{idasiboard}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardPendonorInProgressAsi'])->name('DetailDashboardPendonor-InProgressAsi');
    Route::get('/permintaan-donasi-asi', \App\Http\Livewire\DashboardDonasi::class)->name('dashboard-permintaan-donasi-asi'); //hlmn untuk mnmpilkan sttus asiku yg dipesan sama org lain
    Route::get('/request-donasi-asi', \App\Http\Livewire\DashboardDonasiPengajuanAsi::class)->name('dashboard-request-donasi-asi');
    Route::get('/donor-donasi-asi', \App\Http\Livewire\DashboardProductDonorDonasiAsi::class)->name('dashboard-pendonor-donasi-asi');

    Route::get('/detail-permintaan-request-asi/{idasiboard}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardResipienRequestAsi'])->name('DetailDashboardResipien-RequestAsi');
    Route::get('/detail-permintaan-histori-asi/{idasiboard}/{progress}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardResipienHistoriAsi'])->name('DetailDashboardResipien-HistoriAsi');
    Route::get('/detail-permintaan-inprogress-asi/{idasiboard}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardResipienInProgressAsi'])->name('DetailDashboardResipien-InProgressAsi');

    Route::get('/detail-donor-produk-asi/{idasi}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardDonorProdukAsi'])->name('DetailDashboardDonorProdukAsi');
    Route::get('/detail-donor-produk-histori-asi/{idasi}', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardDonorProdukHistoriAsi'])->name('DetailDashboardDonorProduk-HistoriAsi');

    Route::get('/ajukan-bantuan-dana', \App\Http\Livewire\RegisterFund::class)->name('register-fund');

    Route::post('/donasi/detail-resipien-request-asi/proses-request-pendonor', [App\Http\Controllers\AsiProductController::class, 'prosesPermintaanAsiRequestPendonor'])->name('proses-permintaan-asi-request-pendonor');
    Route::post('/donasi/detail-resipien-inprogress-asi/proses-inprogress-pendonor', [App\Http\Controllers\AsiProductController::class, 'prosesPermintaanAsiInProgressPendonor'])->name('proses-permintaan-asi-inprogress-pendonor');

    Route::post('/donasi/detail-permintaan-request-asi/proses-request-resipien', [App\Http\Controllers\AsiProductController::class, 'prosesPermintaanAsiRequestResipien'])->name('proses-permintaan-asi-request-resipien');
    Route::post('/donasi/detail-permintaan-inprogress-asi/proses-inprogress-resipien', [App\Http\Controllers\AsiProductController::class, 'prosesPermintaanAsiInProgressResipien'])->name('proses-permintaan-asi-inprogress-resipien');
    Route::get('/donasi-uang/{idKategori}', \App\Http\Livewire\DonateMoney::class)->name('donate-money.show');

    Route::post('/donasi/detail-donor-produk-request-asi/proses-request-donor-produk', [App\Http\Controllers\AsiProductController::class, 'prosesDonorProdukAsiBatal'])->name('proses-donor-produk-asi');
    Route::get('/message', [MessageController::class, 'message'])->name('messages');
});

Route::middleware(['auth:sanctum', 'verified', \App\Http\Middleware\CheckAdmin::class])->get('/admin', function () {
    return 'admin';
})->name('admin.index');

Route::post('/DataAsi/addasi', [App\Http\Controllers\AsiBoardController::class, 'store'])->name('ProsesPesanAsi');

Route::get('/verify', 'App\Actions\Fortify\CreateNewUser@verifyUser')->name('verify.user');
