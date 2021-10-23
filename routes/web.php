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
    return view('welcome');
});

Route::get('/DataAsi', [App\Http\Controllers\AsiProductController::class,'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified', \App\Http\Middleware\CheckAdmin::class])->get('/admin', function () {
    return "admin";
})->name('admin.index');

Route::get('/DataAsi/{id}', [App\Http\Controllers\AsiProductController::class,'show']);
Route::post('/DataAsi/addasi', [App\Http\Controllers\AsiBoardController::class,'store'])->name('ProsesPesanAsi');
