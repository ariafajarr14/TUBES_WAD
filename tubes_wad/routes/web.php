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
//doktre

Auth::routes();



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/layouts/client_form', [App\Http\Controllers\HomeController::class, 'form'])->name('client_form');
    Route::get('/layouts/daftar_obat', [App\Http\Controllers\HomeController::class, 'daftar_obat'])->name('daftar_obat');
    Route::get('/layouts/client_feedback', [App\Http\Controllers\HomeController::class, 'client_feedback'])->name('client_feedback');
    Route::get('/layouts/admin_tambahobat', [App\Http\Controllers\HomeController::class, 'tambahobat'])->name('admin_tambahobat');
    Route::get('/layouts/dokter_rekammedis', [App\Http\Controllers\HomeController::class, 'dokter_rekammedis'])->name('dokter_rekammedis');
    Route::get('/layouts/dokter_repfeedback', [App\Http\Controllers\HomeController::class, 'dokter_repfeedback'])->name('dokter_rekammedis');

Route::post('/')
