<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [FrontendController::class , 'index'])->name('pages.index');
Route::get('detail' , [FrontendController::class , 'detail'])->name('pages.detail');
Route::get('shop' , [FrontendController::class , 'shop'])->name('pages.shop');
Route::get('contact' , [FrontendController::class , 'contact'])->name('pages.contact');
Route::get('blog' , [FrontendController::class , 'blog'])->name('pages.blog');
Route::get('blog_detail' , [FrontendController::class , 'blog_detail'])->name('pages.blog_detail');
Route::get('tournament' , [FrontendController::class , 'tournament'])->name('pages.tournament');
Route::get('squad' , [FrontendController::class , 'squad'])->name('pages.squad');
Route::get('match' , [FrontendController::class , 'match'])->name('pages.match');
Route::get('about' , [FrontendController::class , 'about'])->name('pages.about');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Contact
Route::get('contact-us' , [ContactController::class , 'store'])->name('contact.store');


//Profile   
Route::get('profile/edit' , [ProfileController::class , 'edit'])->name('pages.profile.edit');
Route::post('profile/update' , [ProfileController::class , 'update'])->name('pages.profile.update');