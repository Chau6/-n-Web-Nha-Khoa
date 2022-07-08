<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::get('/', [LoginController::class, 'getLogin'])->name('getLogin');

//==================Register===================
Route::get('register', [RegisterController::class, 'getRegister'])->name('getRegister');
Route::post('register', [RegisterController::class, 'postRegister'])->name('postRegister');

//================Login/Logout=================
Route::get('login', [LoginController::class, 'getLogin'])->name('getLogin');
Route::post('login', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [LoginController::class, 'getLogout'])->name('getLogout');

//===================ADMIN=====================
Route::prefix('admin')->middleware('login')->name('admin.')->group(function(){
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('index', [UserController::class, 'index'])->name('index');

        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');

        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [UserController::class, 'update'])->name('update')->where('id', '[0-9]+');

        Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });
});


//====================Client=====================
Route::prefix('client')->name('client.')->group(function(){
    Route::prefix('pages')->name('pages.')->group(function(){
    //==========index
        Route::get('index', [HomeController::class, 'index'])->name('index');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('blog', [HomeController::class, 'blog'])->name('blog');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::get('doctors', [HomeController::class, 'doctors'])->name('doctors');
        Route::get('product', [HomeController::class, 'product'])->name('product');
        Route::get('specialities', [HomeController::class, 'specialities'])->name('specialities');
        Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
        Route::get('appointment', [HomeController::class, 'appointment'])->name('appointment');

        Route::get('rating', [HomeController::class, 'rating'])->name('rating');
        Route::get('product_pages', [HomeController::class, 'product_pages'])->name('product_pages');
    });
});