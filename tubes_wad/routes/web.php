<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\NgobatController;
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
//doktre





    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/layouts/dokter_rekammedis', [App\Http\Controllers\HomeController::class, 'dokter_rekammedis'])->name('dokter_rekammedis');

    Route::get('/layouts/admin_tambahobat', [App\Http\Controllers\ObatController::class, 'index'])->name('admin_tambahobat');
    Route::post('/layouts/admin_tambahobat', [App\Http\Controllers\ObatController::class, 'store'])->name('admin_tambahobat');
    Route::get('/layouts/daftar_obat', [App\Http\Controllers\ObatController::class, 'index2'])->name('daftar_obat');
    //Route::post('/layouts/admin_tambahobat', [App\Http\Controllers\ObatController::class, 'delete'])->name('admin_tambahobat.delete');

    //Route::post('/layouts/admin_tambahobat', [App\Http\Controllers\ObatController::class, 'update'])->name('admin_tambahobat');
    Route::get('/layouts/client_form', [App\Http\Controllers\ClientController::class, 'clientform'])->name('client_form');
    Route::post('/layouts/client_form', [App\Http\Controllers\ClientController::class, 'store'])->name('client_form');
    Route::get('/layouts/client_feedback', [App\Http\Controllers\ClientController::class, 'clientfeedback'])->name('client_feedback');

    Route::get('/layouts/dokter_repfeedback', [App\Http\Controllers\DokterController::class, 'indexreplydokter'])->name('dokter_repfeedback');
    Route::post('/layouts/dokter_repfeedback', [App\Http\Controllers\DokterController::class, 'store'])->name('dokter_repfeedback');
    Route::get('/layouts/client_feedback', [App\Http\Controllers\DokterController::class, 'dokterfeedback'])->name('client_feedback');


      
    Auth::routes();