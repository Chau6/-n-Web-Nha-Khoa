<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\IndexPageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Login_ClientController;
use App\Http\Controllers\Register_ClientController;

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


Route::get('/', [Login_ClientController::class, 'getLoginClient'])->name('getLoginClient');

Route::get('logout', [LoginController::class, 'getLogout'])->name('getLogout');
Route::get('logout_client', [Login_ClientController::class, 'getLogoutClient'])->name('getLogoutClient');

Route::middleware('register')->group(function(){
    //==================Register===================
    // Admin
    // Route::get('register', [Register_ClientController::class, 'getRegisterClient'])->name('getRegisterClient');
    // Route::post('register', [Register_ClientController::class, 'postRegisterClient'])->name('postRegisterClient');
    
    // Client
    Route::get('register_client', [Register_ClientController::class, 'getRegisterClient'])->name('getRegisterClient');
    Route::post('register_client', [Register_ClientController::class, 'postRegisterClient'])->name('postRegisterClient');

    // ================Login/Logout=================
    // Admin
    // Route::get('login', [Login_ClientController::class, 'getLoginClient'])->name('getLoginClient');
    // Route::post('login', [Login_ClientController::class, 'postLoginClient'])->name('postLoginClient');


    //Client
    Route::get('login_client', [Login_ClientController::class, 'getLoginClient'])->name('getLoginClient');
    Route::post('login_client', [Login_ClientController::class, 'postLoginClient'])->name('postLoginClient');


    //=================Send Mail===================

    // ================Forgot Pass=================
    Route::get('send_mail_pass', [Login_ClientController::class, 'send_mail_pass'])->name('send_mail_pass');
    Route::post('send_mail_pass', [Login_ClientController::class, 'post_send_mail_pass'])->name('post_send_mail_pass');

    Route::get('get_reset_pass/{customer}', [Login_ClientController::class, 'GetResetPass'])->name('GetResetPass');
    Route::post('post_reset_pass/{customer}', [Login_ClientController::class, 'PostResetPass'])->name('PostResetPass');
});




Route::get('testmail', [LoginController::class, 'testMail'])->name('testmail');

//===================ADMIN=====================
Route::middleware('admin', 'login')->group(function(){
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('index_pages', [IndexPageController::class, 'index'])->name('index_pages');
        //User
        Route::prefix('user')->name('user.')->group(function(){
            Route::get('index', [UserController::class, 'index'])->name('index');
    
            // Route::get('create', [UserController::class, 'create'])->name('create');
            Route::post('store', [UserController::class, 'store'])->name('store');
    
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
            Route::post('update/{id}', [UserController::class, 'update'])->name('update')->where('id', '[0-9]+');
    
            Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
        });

        //Category
        Route::prefix('category')->name('category.')->group(function(){
            /** Show list of category */
            Route::get('index', [CategoryController::class, 'index'])->name('index');
            /** Create category */
            Route::get('create', [CategoryController::class, 'create'])->name('create'); //Show form to create category
            Route::post('store', [CategoryController::class, 'store'])->name('store'); //set action in form to create category
            /** Edit category */
            Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit category
            Route::post('update/{id}', [CategoryController::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update category
            /** Delete category */
            Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete')->where('id','[0-9]+');
        });
        
         //Product
        Route::prefix('product')->name('product.')->group(function(){
        /** Show list of product */
         Route::get('index', [ProductController::class, 'index'])->name('index');
                    /** Create product */
        Route::get('create', [ProductController::class, 'create'])->name('create'); //Show form to create category
        Route::post('store', [ProductController::class, 'store'])->name('store'); //set action in form to create category
                    /** Edit product */
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit category
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update category
        /** Delete product */
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete')->where('id','[0-9]+');
         });
        // Post
        Route::prefix('post')->name('post.')->group(function(){
            /** Show list of post */
            Route::get('index', [PostController::class, 'index'])->name('index');
            /** Create post */
            Route::get('create', [PostController::class, 'create'])->name('create'); //Show form to create post
            Route::post('store', [PostController::class, 'store'])->name('store'); //set action in form to create post
            /** Edit post */
            Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit post
            Route::post('update/{id}', [PostController::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update post
            /** Delete post */
            Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete')->where('id','[0-9]+');
        });
    });
});



//====================Client=====================

Route::prefix('client')->name('client.')->group(function(){
    Route::prefix('pages')->name('pages.')->group(function(){
    //==========index
        Route::get('advice', [HomeController::class, 'advice'])->name('advice');
        Route::get('danh_rang', [HomeController::class, 'danh_rang'])->name('danh_rang');
        Route::get('index', [HomeController::class, 'index'])->name('index');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('blog', [HomeController::class, 'blog'])->name('blog');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::get('doctors', [HomeController::class, 'doctors'])->name('doctors')->middleware('login');
        Route::get('product', [HomeController::class, 'product'])->name('product');
        Route::get('specialities', [HomeController::class, 'specialities'])->name('specialities');
        Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
        Route::get('appointment', [HomeController::class, 'appointment'])->name('appointment')->middleware('login');
        Route::get('rating', [HomeController::class, 'rating'])->name('rating');
        Route::get('product_pages', [HomeController::class, 'product_pages'])->name('product_pages');
        Route::get('information_client', [HomeController::class, 'information_client'])->name('information_client');
        
    });
});
