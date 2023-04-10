<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\UserController;

//message
Route::get('queries' , [MessageController::class , 'index'])->name('message.index');

//User
Route::get('user/index' , [UserController::class , 'index'])->name('user.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dashboard' , [FrontendController::class , 'dashboard'])->name('admin.pages.dashboard');
