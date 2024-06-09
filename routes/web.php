<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Sesicontroller;
use App\Http\Middleware\Userakses;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RajalController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function(){
    Route::get('/',[Sesicontroller::class, 'index'])->name('login');
    Route::post('/',[Sesicontroller::class, 'login']);
});

Route::get('/home',function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::post('/login',[Sesicontroller::class, 'login']);
    Route::get('/admin/beranda',[Admincontroller::class, 'admin']);
    Route::get('/admin/pendaftaran',[Admincontroller::class, 'pendaftaran']);
    Route::get('/admin/poli',[Admincontroller::class, 'poli']);
    Route::get('/logout',[Sesicontroller::class,'logout']);

});

Route::resource('profile', ProfileController::class);


Route::get('/rekam_medis', [RekamMedisController::class, 'medis'])->name('rekam_medis.medis');
Route::get('/create-medis', [RekamMedisController::class, 'create']);
Route::post('/simpan-rekam_medis', [RekamMedisController::class, 'store'])->name('rekam_medis.simpan');
Route::put('/rekam_medis/{NIK}', [RekamMedisController::class, 'update'])->name('rekam_medis.update');
Route::delete('/rekam_medis/{NIK}', [RekamMedisController::class, 'destroy'])->name('rekam_medis.hapus');
Route::get('/cetak-medis', [RekamMedisController::class, 'cetakMedis']);

Route::get('/data_dokter', [DokterController::class, 'dokter'])->name('data_dokter.dokter');
Route::get('/create-dokter', [DokterController::class, 'create']);
Route::post('/simpan-data_dokter', [DokterController::class, 'store'])->name('data_dokter.simpan');
Route::put('/data_dokter/{NIK_Dokter}', [DokterController::class, 'update'])->name('data_dokter.update');
Route::delete('/data_dokter/{NIK_Dokter}', [DokterController::class, 'destroy'])->name('data_dokter.hapus');
Route::get('/cetak-dokter', [DokterController::class, 'cetakDokter']);

Route::get('/pasien_rajal', [RajalController::class, 'rajal'])->name('pasien_rajal.rajal');
Route::get('/create-rajal', [RajalController::class, 'create']);
Route::post('/simpan-pasien_rajal', [RajalController::class, 'store'])->name('pasien_rajal.simpan');
Route::put('/pasien_rajal/{NIK}', [RajalController::class, 'update'])->name('pasien_rajal.update');
Route::delete('/pasien_rajal/{NIK}', [RajalController::class, 'destroy'])->name('pasien_rajal.hapus');
Route::get('/cetak-rajal', [RajalController::class, 'cetakRajal']);


