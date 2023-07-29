<?php


Auth::routes();

Route::get('dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\dashboard','prefix'=>'dashboard'],function (){

    Route::group(['prefix' => 'profile'],function (){
        Route::get('/', 'ProfileController@index')->name('profile.index');
        Route::get('create', 'ProfileController@create')->name('profile.create');
        Route::post('store', 'ProfileController@store')->name('profile.store');
        Route::get('destroy/{id}', 'ProfileController@destroy')->name('profile.destroy');
        Route::get('edit/{id}', 'ProfileController@edit')->name('profile.edit');
        Route::post('update/{id}', 'ProfileController@update')->name('profile.update');
    });

    Route::group(['prefix' => 'doctor', 'as' =>'doctor.'],function (){
        Route::get('doctors', 'DoctorController@index')->name('index');
        Route::get('create', 'DoctorController@create')->name('create');
        Route::post('store', 'DoctorController@store')->name('store');
        Route::get('destroy/{id}', 'DoctorController@destroy')->name('destroy');
        Route::get('edit/{id}', 'DoctorController@edit')->name('edit');
        Route::post('update/{id}', 'DoctorController@update')->name('update');
    });

    Route::group(['prefix' => 'appointment'],function (){
        Route::get('/', 'AppointmentController@index')->name('appointment.index');
        Route::get('create', 'AppointmentController@create')->name('appointment.create');
        Route::post('store', 'AppointmentController@store')->name('appointment.store');
        Route::get('destroy/{id}', 'AppointmentController@destroy')->name('appointment.destroy');
        Route::get('edit/{id}', 'AppointmentController@edit')->name('appointment.edit');
        Route::post('update/{id}', 'AppointmentController@update')->name('appointment.update');
    });

    Route::group(['prefix' => 'service','as'=>'service.'],function (){
        Route::get('/index', 'ServiceController@index')->name('index');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::post('store', 'ServiceController@store')->name('store');
        Route::get('destroy/{id}', 'ServiceController@destroy')->name('destroy');
        Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
        Route::post('update/{id}', 'ServiceController@update')->name('update');
    });

    Route::group(['prefix' => 'service-category'],function (){
        Route::get('/', 'ServiceCategoryController@index')->name('service-category.index');
        Route::get('create', 'ServiceCategoryController@create')->name('service-category.create');
        Route::post('store', 'ServiceCategoryController@store')->name('service-category.store');
        Route::get('destroy/{id}', 'ServiceCategoryController@destroy')->name('service-category.destroy');
        Route::get('edit/{id}', 'ServiceCategoryController@edit')->name('service-category.edit');
        Route::post('update/{id}', 'ServiceCategoryController@update')->name('service-category.update');
    });

    Route::group(['prefix' => 'offer-category'],function (){
        Route::get('/', 'OfferCategoryController@index')->name('offer-category.index');
        Route::get('create', 'OfferCategoryController@create')->name('offer-category.create');
        Route::post('store', 'OfferCategoryController@store')->name('offer-category.store');
        Route::get('destroy/{id}', 'OfferCategoryController@destroy')->name('offer-category.destroy');
        Route::get('edit/{id}', 'OfferCategoryController@edit')->name('offer-category.edit');
        Route::post('update/{id}', 'OfferCategoryController@update')->name('offer-category.update');
    });

    Route::group(['prefix' => 'offer'],function (){
        Route::get('/', 'OfferController@index')->name('offer.index');
        Route::get('create', 'OfferController@create')->name('offer.create');
        Route::post('store', 'OfferController@store')->name('offer.store');
        Route::get('destroy/{id}', 'OfferController@destroy')->name('offer.destroy');
        Route::get('edit/{id}', 'OfferController@edit')->name('offer.edit');
        Route::post('update/{id}', 'OfferController@update')->name('offer.update');
    });

    Route::group(['prefix' => 'blog-cats'],function (){
        Route::get('/', 'BlogCategoryController@index')->name('blog-cats.index');
        Route::get('create', 'BlogCategoryController@create')->name('blog-cats.create');
        Route::post('store', 'BlogCategoryController@store')->name('blog-cats.store');
        Route::get('destroy/{id}', 'BlogCategoryController@destroy')->name('blog-cats.destroy');
        Route::get('edit/{id}', 'BlogCategoryController@edit')->name('blog-cats.edit');
        Route::post('update/{id}', 'BlogCategoryController@update')->name('blog-cats.update');
    });

    Route::group(['prefix' => 'register-offer','as'=>'register-offer.'],function (){
        Route::get('/', 'RegisterOfferController@index')->name('index');
        Route::get('create', 'RegisterOfferController@create')->name('create');
        Route::post('store', 'RegisterOfferController@store')->name('store');
        Route::get('destroy/{id}', 'RegisterOfferController@destroy')->name('destroy');
        Route::get('edit/{id}', 'RegisterOfferController@edit')->name('edit');
        Route::post('update/{id}', 'RegisterOfferController@update')->name('update');
    });

    Route::group(['prefix' => 'discount','as'=>'discount.'],function (){
        Route::get('index', 'DiscountController@index')->name('index');
        Route::get('create', 'DiscountController@create')->name('create');
        Route::post('store', 'DiscountController@store')->name('store');
        Route::get('destroy/{id}', 'DiscountController@destroy')->name('destroy');
        Route::get('edit/{id}', 'DiscountController@edit')->name('edit');
        Route::post('update/{id}', 'DiscountController@update')->name('update');
    });

    Route::group(['prefix' => 'blog','as'=>'blog.'],function (){
        Route::get('index', 'BlogController@index')->name('index');
        Route::get('create', 'BlogController@create')->name('create');
        Route::post('store', 'BlogController@store')->name('store');
        Route::get('destroy/{id}', 'BlogController@destroy')->name('destroy');
        Route::get('edit/{id}', 'BlogController@edit')->name('edit');
        Route::post('update/{id}', 'BlogController@update')->name('update');
    });

    Route::group(['prefix' => 'applicant','as'=>'applicant.'],function (){
        Route::get('index', 'ApplicatantController@index')->name('index');
        Route::get('create', 'ApplicatantController@create')->name('create');
        Route::post('store', 'ApplicatantController@store')->name('store');
        Route::get('destroy/{id}', 'ApplicatantController@destroy')->name('destroy');
        Route::get('edit/{id}', 'ApplicatantController@edit')->name('edit');
        Route::post('update/{id}', 'ApplicatantController@update')->name('update');
    });

    Route::group(['prefix' => 'job','as'=>'job.'],function (){
        Route::get('index', 'JobController@index')->name('index');
        Route::get('create', 'JobController@create')->name('create');
        Route::post('store', 'JobController@store')->name('store');
        Route::get('destroy/{id}', 'JobController@destroy')->name('destroy');
        Route::get('edit/{id}', 'JobController@edit')->name('edit');
        Route::post('update/{id}', 'JobController@update')->name('update');
    });

    Route::group(['prefix' => 'appInfo','as'=>'appInfo.'],function (){
        Route::get('index', 'AppInfoController@index')->name('index');
        Route::get('create', 'AppInfoController@create')->name('create');
        Route::post('store', 'AppInfoController@store')->name('store');
        Route::get('destroy/{id}', 'AppInfoController@destroy')->name('destroy');
        Route::get('edit/{id}', 'AppInfoController@edit')->name('edit');
        Route::post('update/{id}', 'AppInfoController@update')->name('update');
    });

    //chats
    Route::resource('chats', \App\Http\Controllers\dashboard\ChatController::class);
    Route::post('/refresh/chats', [\App\Http\Controllers\dashboard\ChatController::class, 'refresh'])->name('chats.refresh');
    Route::post('/chat-reply', [\App\Http\Controllers\dashboard\ChatController::class, 'reply'])->name('chats.reply');


    Route::group(['prefix' => 'feedback','as'=>'feedback.'],function (){
        Route::get('/', 'FeedbackController@index')->name('index');
        Route::get('create', 'FeedbackController@create')->name('create');
        Route::post('store', 'FeedbackController@store')->name('store');
        Route::get('destroy/{id}', 'FeedbackController@destroy')->name('destroy');
        Route::get('show/{id}', 'FeedbackController@show')->name('show');
        Route::post('update/{id}', 'FeedbackController@update')->name('update');
    });

    Route::group(['prefix' => 'blog_comment','as'=>'blog_comment.'],function (){
        Route::get('/', 'BlogCommentController@index')->name('index');
        Route::get('create', 'BlogCommentController@create')->name('create');
        Route::post('store', 'BlogCommentController@store')->name('store');
        Route::get('destroy/{id}', 'BlogCommentController@destroy')->name('destroy');
        Route::get('edit/{id}', 'BlogCommentController@edit')->name('edit');
        Route::get('show/{id}', 'BlogCommentController@show')->name('show');
        Route::post('update/{id}', 'BlogCommentController@update')->name('update');
    });

});
