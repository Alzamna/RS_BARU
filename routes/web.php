<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Sesicontroller;
use App\Http\Middleware\Userakses;
use App\Http\Controllers\ProfileController;
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

// // Route untuk menampilkan profil admin
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

// // Route untuk menampilkan halaman edit profil
// Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');

// // Route untuk memperbarui profil admin
// Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');


