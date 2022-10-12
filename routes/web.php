<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\IndexPageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Login_ClientController;
use App\Http\Controllers\Register_ClientController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\DoctorTimeController;
use App\Http\Controllers\Client\DatLichController;
use App\Http\Controllers\Admin\Dat_LichController;
use App\Http\Controllers\Client\EditProfileController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Doctor\AppointMent;
use App\Http\Controllers\Doctor\Doctor;
use App\Http\Controllers\Doctor\DoctorTime;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Admin\CkeditorController;


use App\Http\Controllers\CommentController;


use App\Http\Controllers\SearchAjaxController;


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
        Route::get('contact', [IndexPageController::class, 'contact'])->name('contact');
        Route::get('delete/{id}', [IndexPageController::class, 'delete'])->name('delete')->where('id', '[0-9]+');

        //ck
        Route::post('ckeditor/image_upload',[CkeditorController::class, 'upload'])->name('upload');

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
         //Gallery
        Route::prefix('gallery')->name('gallery.')->group(function(){
                Route::get('add_gallery/{product_id}', [GalleryController::class, 'add_gallery'])->name('add_gallery')->where('product_id','[0-9]+');
                Route::post('select_gallery', [GalleryController::class, 'select_gallery'])->name('select_gallery');
                Route::post('insert_gallery/{pro_id}', [GalleryController::class, 'insert_gallery'])->name('insert_gallery');
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

        //Doctor
        Route::prefix('doctor')->name('doctor.')->group(function(){
            /** Show list of Doctor */
            Route::get('index', [DoctorController::class, 'index'])->name('index');
            /** Create Doctor */
            Route::get('create', [DoctorController::class, 'create'])->name('create'); //Show form to create doctor
            Route::post('store', [DoctorController::class, 'store'])->name('store'); //set action in form to create doctor
            /** Edit Doctor */
            Route::get('edit/{id}', [DoctorController::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit doctor
            Route::post('update/{id}', [DoctorController::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update doctor
            /** Delete Doctor */
            Route::get('delete/{}', [DoctorController::class, 'delete'])->name('delete')->where('id','[0-9]+');
        });

        //Doctor_Time
        Route::prefix('doctor_time')->name('doctor_time.')->group(function(){
            /** Show list of Doctor */
            Route::get('index', [DoctorTimeController::class, 'index'])->name('index');
            /** Create Doctor */
            Route::get('create', [DoctorTimeController::class, 'create'])->name('create'); //Show form to create doctor
            Route::post('store', [DoctorTimeController::class, 'store'])->name('store'); //set action in form to create doctor
            /** Edit Doctor */
            Route::get('edit/{id}', [DoctorTimeController::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit doctor
            Route::post('update/{id}', [DoctorTimeController::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update doctor
            /** Delete Doctor */
            Route::get('delete/{id}', [DoctorTimeController::class, 'delete'])->name('delete')->where('id','[0-9]+');
            
        });

        //Booking
        Route::prefix('booking')->name('booking.')->group(function(){
            /** Show list of Doctor */
            Route::get('index', [Dat_LichController::class, 'index'])->name('index');
            Route::get('delete/{id}', [Dat_LichController::class, 'delete'])->name('delete')->where('id','[0-9]+');
            Route::get('edit/{id}', [Dat_LichController::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit doctor
            Route::post('update/{id}', [Dat_LichController::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update doctor
        });
    });
});

Route::middleware('doctor')->group(function(){
    //Doctor
    Route::prefix('doctor')->name('doctor.')->group(function(){
        Route::get('index_pages', [Doctor::class, 'index_pages'])->name('index_pages');
        /** Show list of Doctor */
        Route::get('index', [Doctor::class, 'index'])->name('index');
        // /** Create Doctor */
        // Route::get('create', [Doctor::class, 'create'])->name('create'); //Show form to create doctor
        // Route::post('store', [Doctor::class, 'store'])->name('store'); //set action in form to create doctor
        // /** Edit Doctor */
        Route::get('edit/{id}', [Doctor::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit doctor
        Route::post('update/{id}', [Doctor::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update doctor
        // /** Delete Doctor */
        // Route::get('delete/{id}', [Doctor::class, 'delete'])->name('delete')->where('id','[0-9]+');
    });
    //Doctor_Time
    Route::prefix('doctor_time')->name('doctor_time.')->group(function(){
        /** Show list of Doctor */
        Route::get('index', [DoctorTime::class, 'index'])->name('index');
        // /** Create Doctor */
        // Route::get('create', [DoctorTime::class, 'create'])->name('create'); //Show form to create doctor
        // Route::post('store', [DoctorTime::class, 'store'])->name('store'); //set action in form to create doctor
        // /** Edit Doctor */
        Route::get('edit/{id}', [DoctorTime::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit doctor
        Route::post('update/{id}', [DoctorTime::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update doctor
        // /** Delete Doctor */
        // Route::get('delete/{id}', [DoctorTime::class, 'delete'])->name('delete')->where('id','[0-9]+');       
    });

    //Booking
    Route::prefix('booking')->name('booking.')->group(function(){
        /** Show list of Doctor */
        Route::get('index', [AppointMent::class, 'index'])->name('index');
        // Route::get('delete/{id}', [AppointMent::class, 'delete'])->name('delete')->where('id','[0-9]+');
        Route::get('edit/{id}', [AppointMent::class, 'edit'])->name('edit')->where('id','[0-9]+'); //Show form to edit doctor
        Route::post('update/{id}', [AppointMent::class, 'update'])->name('update')->where('id','[0-9]+'); //set action in form to update doctor
    });
});


    

//====================Client=====================
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::name('client.')->group(function(){
    Route::name('pages.')->group(function(){
    //==========index
        Route::get('advice', [HomeController::class, 'advice'])->name('advice');
        Route::get('danh_rang', [HomeController::class, 'danh_rang'])->name('danh_rang');
        Route::get('index', [HomeController::class, 'index'])->name('index');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('blog', [HomeController::class, 'blog'])->name('blog');
        
        // Contact 
        Route::get('contact', [ContactController::class, 'getcontact'])->name('contact');
        Route::post('contact', [ContactController::class, 'postcontact'])->name('postcontact');

        Route::get('specialities', [HomeController::class, 'specialities'])->name('specialities');
        Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
        Route::get('rating', [HomeController::class, 'rating'])->name('rating');
        
        // Update Information User
        Route::get('information_client', [EditProfileController::class, 'information_client'])->name('information_client')->middleware('login');
        Route::get('edit_profile/{id}', [EditProfileController::class, 'edit_profile'])->name('edit_profile')->middleware('login');
        Route::post('edit_profile/{id}', [EditProfileController::class, 'post_edit_profile'])->name('post_edit_profile');

        // Doctor
        Route::get('doctors', [HomeController::class, 'doctors'])->name('doctors')->middleware('login');
        // Appointment
        Route::get('appointment_index', [DatLichController::class, 'appointment_index'])->name('appointment_index'); 
        Route::get('delete/{id}', [DatLichController::class, 'delete'])->name('delete')->where('id','[0-9]+');
        Route::get('appointment_create', [DatLichController::class, 'appointment_create'])->name('appointment_create')->where('id','[0-9]+')->middleware('login');
        Route::post('store', [DatLichController::class, 'store'])->name('store');
        Route::get('appointment_edit/{id}', [DatLichController::class, 'appointment_edit'])->name('appointment_edit')->where('id','[0-9]+'); 
        Route::post('update/{id}', [DatLichController::class, 'update'])->name('update')->where('id','[0-9]+'); 
        // Ajax
        Route::get('ajax', [AjaxController::class, 'ajax'])->name('ajax');
        Route::post('get_data_ajax', [AjaxController::class, 'get_data_ajax'])->name('get_data_ajax');
       
        // Rating
        Route::post('rating', [HomeController::class, 'rating'])->name('rating');
        Route::post('rating_post', [HomeController::class, 'rating_post'])->name('rating_post');
        // Comment
        Route::post('rating', [HomeController::class, 'rating'])->name('rating');
        Route::post('comment', [CommentController::class, 'store'])->name('comment');


        // Product
        Route::get('product', [HomeController::class, 'product'])->name('product');
        // Health Screening
        Route::get('post', [HomeController::class, 'health_screening'])->name('health_screening');
        // Path
        Route::get('health_screening/{slug}', [HomeController::class, 'post_pages'])->name('post_pages');
        Route::get('product/{slug}', [HomeController::class, 'product_pages'])->name('product_pages');

        Route::post('search-product-ajax', [SearchAjaxController::class, 'PostSearchProduct'])->name('PostSearchProduct');

        Route::get('health_screening/{id}/{slug}/{slug_infor}', [HomeController::class, 'post_infor'])->name('post_infor');
        Route::get('product/{id}/{slug}/{slug_infor}', [HomeController::class, 'product_infor'])->name('product_infor');

        
    });
});
