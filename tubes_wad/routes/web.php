<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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

/*
* Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', function() {
    return view('landing/home');
});


//dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/dashboard', [DashboardController::class, 'dashboard']);

//userAuth
Route::get('/UserAuth/login', [AuthController::class, 'login']);
Route::get('/UserAuth/register', [AuthController::class, 'register']);
Route::post('/UserAuth/postlogin', [AuthController::class, 'postlogin']);
Route::post('/UserAuth/postregister', [AuthController::class, 'postregister']);



Route::post('create', [AuthController::class, 'create'])->name('create');


Route::get('/dashboard/profile', [DashboardController::class, 'profile']);
Route::get('/dashboard/404', [DashboardController::class, 'error']);
Route::get('/dashboard/basic-table', [DashboardController::class, 'icon']);
Route::get('/dashboard/blank', [DashboardController::class, 'blank']);
Route::get('/dashboard/fontawesome', [DashboardController::class, 'fontawesome']);
Route::get('/dashboard/map-google', [DashboardController::class, 'map']);


