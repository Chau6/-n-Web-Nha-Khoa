<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});


// Login

Route::get('login',[LoginController::class,'getlogin'])->name('getlogin');


//Admin

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('index', [AdminController::class, 'index'])->name('index');
    Route::get('basictable', [AdminController::class, 'basicTable'])->name('basicTable');
    Route::get('flotchart', [AdminController::class, 'flotChart'])->name('flotChart');
    Route::get('error', [AdminController::class, 'errorPage'])->name('errorPage');
    Route::get('registration', [AdminController::class, 'registration'])->name('registration');
});

