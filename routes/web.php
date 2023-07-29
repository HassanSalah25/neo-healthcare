<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and     all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {



    Route::group(['namespace' => 'App\Http\Controllers\website', 'as' => 'website.'], function () {


        Route::get('', 'HomeController@index')->name('home');

        Route::group(['prefix' => 'appointment'], function () {
            Route::get('/create', 'AppointmentController@create')->name('appointment');
            Route::get('/createByDoctor/{id}', 'AppointmentController@createByDoctor')->name('appointment.doctor');
            Route::post('/store', 'AppointmentController@store')->name('appointment.store');
        });

        Route::group(['prefix' => 'feedback'], function () {
            Route::get('/create', 'FeedbackController@create')->name('feedback');
            Route::post('/store', 'FeedbackController@store')->name('feedback.store');
        });

        Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
            Route::get('/showDoctors', 'ServiceController@showDoctors')->name('showDoctors');
            Route::get('/{id}', 'ServiceController@index')->name('index');
            Route::get('/services/show', 'ServiceController@getServices')->name('service.show');
            Route::get('/view/{id}', 'ServiceController@getServiceById')->name('view');
        });

        Route::group(['prefix' => 'doctor'], function () {
            Route::get('/', 'DoctorController@index')->name('doctor');
            Route::get('/show/{id}', 'DoctorController@show')->name('doctor.show');
        });


        Route::group(['prefix' => 'page', 'as' => 'page.'], function () {
            Route::get('/about_us', 'PageConttroller@about_us')->name('about_us');
            Route::get('/offers', 'PageConttroller@offers')->name('offers');
            Route::get('/offers_show/{id}', 'PageConttroller@offers_show')->name('offers_show');
            Route::get('/create_offer/{id}', 'PageConttroller@create_offer')->name('create_offer');
            Route::post('/store_offer', 'PageConttroller@store_offer')->name('store_offer');
        });

        Route::group(['prefix' => 'discount', 'as' => 'discount.'], function () {
            Route::get('/', 'DiscountController@index')->name('index');
            Route::get('/show', 'DiscountController@show')->name('show');
            Route::get('/view/{id}', 'DiscountController@getServiceById')->name('view');
        });

        Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
            Route::get('/', 'BlogController@index')->name('index');
            Route::get('/{slug}', 'BlogController@show')->name('show');
            Route::get('show/{id}', 'BlogController@getBlog');
            Route::get('/view/{slug}', 'BlogController@getServiceById')->name('view');
        });

        Route::group(['prefix' => 'applicant', 'as' => 'applicant.'], function () {
            Route::get('/', 'ApplicatantController@create')->name('create');
            Route::get('/index', 'ApplicatantController@index')->name('index');
            Route::get('/jobs', 'ApplicatantController@jobs')->name('jobs');
            Route::get('/job-show/{id}', 'ApplicatantController@job_show')->name('job.show');
            Route::post('/store', 'ApplicatantController@store')->name('store');

        });

        Route::group(['prefix' => 'blog_comment', 'as' => 'blog_comment.'], function () {
            Route::post('/store', 'BlogCommentController@store')->name('store');

        });


        Route::get('chats/user/index', [\App\Http\Controllers\Api\ChatController::class, 'index'])->name('user.messages');
        Route::get('chats/user/send', [\App\Http\Controllers\Api\ChatController::class, 'send'])->name('user.send');
        Route::get('chats/new-messages', [\App\Http\Controllers\Api\ChatController::class, 'new_messages']);


        Route::get('search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');

    });


});
