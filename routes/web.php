<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Sesicontroller;
use App\Http\Middleware\Userakses;
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