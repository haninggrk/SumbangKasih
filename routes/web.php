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

Route::get('/', [App\Http\Controllers\welcome::class, 'index'])->name('welcome');
//Route::get('/data-asi', [App\Http\Controllers\AsiProductController::class,'index']);

// Route dashboard taroh disini
Route::middleware(['auth:sanctum', 'verified'])->prefix("dashboard")->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/data-donasi', \App\Http\Livewire\FindDonation::class)->name('data-donasi');
    //Route::get('/data-donasi-asi/{id}', [App\Http\Controllers\AsiProductController::class,'show'])->name('detailAsi');
    Route::get('/detail-donasi/asi/{asiId}', \App\Http\Livewire\DonateAsi::class)->name('detailAsi');
    Route::post('/donasi/request-get-donasi-asi', [App\Http\Controllers\AsiProductController::class, 'showDetailDashboardRequestAsi'])->name('DetailDashboardRequestAsi');

    Route::get('/donasi', \App\Http\Livewire\DashboardDonasi::class);
    Route::get('/ajukan-bantuan-dana', \App\Http\Livewire\RegisterFund::class)->name('register-fund');

    Route::get('/lakukan-donasi-uang/{idKategori}', \App\Http\Livewire\DonateMoney::class)->name('donate-money');
});


Route::middleware(['auth:sanctum', 'verified', \App\Http\Middleware\CheckAdmin::class])->get('/admin', function () {
    return "admin";
})->name('admin.index');


Route::post('/DataAsi/addasi', [App\Http\Controllers\AsiBoardController::class, 'store'])->name('ProsesPesanAsi');
