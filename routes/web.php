<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Request;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::group(['middleware' => ['auth','cekrole:admin']], function (){
  Route::get('dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => ['auth','cekrole:admin,siswa']], function (){
  Route::get('dashboard', [DashboardController::class, 'dashboard']);
});
