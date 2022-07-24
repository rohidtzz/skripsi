<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HrdController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DataUserController;

use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

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

    //absen
    Route::get('/hrd/home', [AbsenController::class, 'indexhrd']);

    Route::get('/hrd/lihatabsen', [HrdController::class, 'lihatabsen']);

    Route::get('/hrd/lihatabsen/masuk', [HrdController::class, 'lihatabsenmasuk']);
    Route::get('/hrd/lihatabsen/telat', [HrdController::class, 'lihatabsentelat']);
    Route::get('/hrd/lihatabsen/alpha', [HrdController::class, 'lihatabsenalpha']);
    Route::get('/hrd/lihatabsen/sakit', [HrdController::class, 'lihatabsensakit']);
    Route::get('/hrd/lihatabsen/izin', [HrdController::class, 'lihatabsenizin']);

    Route::get('/hrd/absen/edit/{id}', [HrdController::class, 'edit']);
    Route::post('/hrd/absen/update/{id}', [HrdController::class, 'update']);
    Route::get('/hrd/absen/destroy/{id}', [HrdController::class, 'destroy']);

    //pengajuan
    Route::get('/hrd/pengajuan', [PengajuanController::class, 'pengajuan']);
    Route::get('/hrd/datapengajuan', [PengajuanController::class, 'datapengajuan']);
    Route::post('/hrd/pengajuan/post', [PengajuanController::class, 'pengajuanpost']);

    Route::get('/hrd/pengajuan/terima/{id}', [PengajuanController::class, 'pengajuanterima']);
    Route::get('/hrd/pengajuan/tolak/{id}', [PengajuanController::class, 'pengajuantolak']);

    Route::get('/hrd/pengajuan/edit/{id}', [PengajuanController::class, 'pengajuanedit']);
    Route::get('/hrd/pengajuan/edit/post/{id}', [PengajuanController::class, 'pengajuaneditpost']);

    Route::get('/hrd/pengajuan/destroy/{id}', [PengajuanController::class, 'destroy']);

    //user
    Route::get('hrd/user', [HrdController::class, 'user']);
    Route::get('hrd/datauser', [HrdController::class, 'datauser']);
    Route::get('hrd/user/edit/{id}', [HrdController::class, 'datauseredit']);
    Route::post('hrd/user/edit/post', [HrdController::class, 'usereditpost']);
    Route::get('hrd/user/destroy/{id}', [HrdController::class, 'userdestroy']);
    Route::get('hrd/user/read/{id}', [HrdController::class, 'datauserread']);



    //setting
    Route::get('/hrd/settings/jamkerja', [SettingController::class, 'jamkerja']);
    Route::post('/hrd/settings/jamkerja/update', [SettingController::class, 'jamkerjaupdate']);

    //tambahuser
    Route::get('/hrd/tambahuser', [HrdController::class, 'tambahuser']);
    Route::post('/hrd/tambahuser/post', [HrdController::class, 'tambahuserpost']);

    Route::post('/hrd/uploadpdf', [DataUserController::class, 'tambahpdf']);

    Route::post('/user/import_excel', [HrdController::class, 'import_excel']);


});

Route::group(['middleware' => ['CekRole:karyawan']], function () {

    //dashboard
    Route::get('/karyawan/home', [AbsenController::class, 'indexkaryawan']);
    Route::get('/karyawan/dashboard', [KaryawanController::class, 'dashboard'])->name('dashboard');

    Route::get('/karyawan/pengajuan', [PengajuanController::class, 'pengajuan']);

    Route::post('/karyawan/pengajuan/post', [PengajuanController::class, 'pengajuanpost']);

    Route::get('/karyawan/LihatAbsen', [KaryawanController::class, 'showabsen'])->name('ShowAbsen');

    Route::get('/karyawan/lihatabsen/masuk', [KaryawanController::class, 'lihatabsenmasuk']);
    Route::get('/karyawan/lihatabsen/telat', [KaryawanController::class, 'lihatabsentelat']);
    Route::get('/karyawan/lihatabsen/alpha', [KaryawanController::class, 'lihatabsenalpha']);
    Route::get('/karyawan/lihatabsen/sakit', [KaryawanController::class, 'lihatabsensakit']);
    Route::get('/karyawan/lihatabsen/izin', [KaryawanController::class, 'lihatabsenizin']);

    //user
    Route::get('karyawan/user', [KaryawanController::class, 'user']);
    Route::post('/karyawan/user/edit/post', [KaryawanController::class, 'usereditpost']);





});

Route::group(['middleware' => ['CekRole:direktur']], function () {

    //dashboard
    Route::get('/direktur/dashboard', [DirekturController::class, 'index']);

    //absen
    Route::get('/direktur/home', [AbsenController::class, 'indexdirektur']);

    Route::get('/direktur/lihatabsen', [DirekturController::class, 'lihatabsen']);

    Route::get('/direktur/lihatabsen/masuk', [DirekturController::class, 'lihatabsenmasuk']);
    Route::get('/direktur/lihatabsen/telat', [DirekturController::class, 'lihatabsentelat']);
    Route::get('/direktur/lihatabsen/alpha', [DirekturController::class, 'lihatabsenalpha']);
    Route::get('/direktur/lihatabsen/sakit', [DirekturController::class, 'lihatabsensakit']);
    Route::get('/direktur/lihatabsen/izin', [DirekturController::class, 'lihatabsenizin']);

    Route::get('/direktur/settings/jamkerja', [SettingController::class, 'jamkerja']);

    //pengajuan
    Route::get('/direktur/pengajuan', [PengajuanController::class, 'pengajuan']);
    Route::get('/direktur/datapengajuan', [PengajuanController::class, 'datapengajuan']);
    Route::post('/direktur/pengajuan/post', [PengajuanController::class, 'pengajuanpost']);

    //user
    Route::get('direktur/user', [DirekturController::class, 'user']);
    Route::get('direktur/datauser', [DirekturController::class, 'datauser']);
    Route::post('direktur/user/edit/post', [DirekturController::class, 'usereditpost']);

    Route::get('direktur/user/read/{id}', [DirekturController::class, 'datauserread']);

});

// Route::group(['middleware' => [config('ipaddress:ip_address')]], function() {

// });

Route::post('/absen/checkout', [AbsenController::class, 'checkOut'])->name('checkout');
Route::post('/absen/checkin', [AbsenController::class, 'checkIn'])->name('checkin');



Route::fallback(function(){
    return back();
});
