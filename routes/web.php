<?php


// les routes des users
Route::group(['namespace' => 'User'],function(){
    Route::get('/','HomeController@index')->name('home-index');
    Route::get('post/{post}','PostController@post')->name('post');
    
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/categorie/{category}','HomeController@category')->name('category');


    // route pours les vue de like 
    Route::post('getPosts','PostController@getAllPost');
    Route::post('saveLike','PostController@saveLike');
});

// les routes des admins
Route::group(['namespace' => 'Admin'],function(){

    // home route
    Route::get('admin/home','HomeController@index')->name('admin.home');

    //user route
    Route::resource('admin/user','UserController');

    //role route
    Route::resource('admin/role','RoleController');

    //permission route
    Route::resource('admin/permission','PermissionController');

    //post route
    Route::resource('admin/post','PostController');

    //tag route
    Route::resource('admin/tag','TagController');

    //categorie route
    Route::resource('admin/category','CategoryController');

    // Admin Auth Routes
    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login','Auth\LoginController@login')->name('admin.login');
    Route::post('admin-logout','Auth\LoginController@logout')->name('admin.logout');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
