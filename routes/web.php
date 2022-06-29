<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HrdController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\AbsenController;

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


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['CekLoginLagi']], function () {

    Route::get('/', function () {
        return view('index');
    });

    // Route::post('/login', 'AuthController@login' )->name('loginpost');

    Route::post('/login', [AuthController::class, 'login']);

});




Route::group(['middleware' => ['CekRole:hrd']], function () {

    //dashboard
    Route::get('/hrd/dashboard', [HrdController::class, 'index']);

});

Route::group(['middleware' => ['CekRole:karyawan']], function () {

    //dashboard
    Route::get('/karyawan/home', [AbsenController::class, 'index']);
    Route::get('/karyawan/dashboard', [KaryawanController::class, 'dashboard'])->name('dashboard');
    Route::get('/karyawan/LihatAbsen', [KaryawanController::class, 'showabsen'])->name('ShowAbsen');


});

Route::group(['middleware' => ['CekRole:direktur']], function () {

    //dashboard
    Route::get('/direktur/dashboard', [DirekturController::class, 'index']);

});

Route::group(['middleware' => [config('ipaddress:ip_address')]], function() {

});

Route::post('/absen/checkout', [AbsenController::class, 'checkOut'])->name('checkout');
Route::post('/absen/checkin', [AbsenController::class, 'checkIn'])->name('checkin');



