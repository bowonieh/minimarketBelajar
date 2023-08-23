<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PerusahaanController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'check']);
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboardAdmin');
});

//Routing Perusahaan
Route::prefix('dashboard')->group(function(){
    Route::get('/perusahaan',[PerusahaanController::class,'index'])->name('listPerusahaan');
    Route::get('/perusahaan/edit',[PerusahaanController::class,'edit'])->name('editPerusahaan');
    Route::post('/perusahaan/simpan',[PerusahaanController::class,'store'])->name('simpanPerusahaan');
});

Route::prefix('kasir')->middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardKasir::class,'index'])->name('dashboardKasir');
});