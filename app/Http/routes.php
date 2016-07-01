<?php

Route::get('/', ['middleware' => 'fun','as'=>'home','uses' => 'home@index']);

//Route::get('/',array('as'=>'Home','uses'=>'home@index'));

Route::get('home',array('middleware' => 'fun' ,'as'=>'home','uses'=>'home@index'));

/*Resources */

Route::group(['middleware' => 'auth'], function()
{
        Route::get('authors', array('as'=>'authors','uses'=>'authors@index'));

        Route::get('authors/{id}',array('as'=>'authordetail','uses'=>'Authors@detailview'),function(Social\Models\Author $author){

          });

        Route::get('profile',['as'=>'profile', 'uses'=> 'profile@index']);

        Route::post('profile/{pid}',['as'=>'profile.update','uses'=>'profile@update']);

        Route::get('wizard',['as'=>'wizard','uses'=>'wizard@index']);

});

Route::group(['prefix'=>'api','namespace'=>'Api','middleware'=>'auth'],function(){

      // /api/authors   --route
      Route::resource('authors','AuthorsAPIController',['only'=>['index','show','update','store','destroy']]);

    // /api/users --route
      Route::resource('users','UsersAPIController',['only'=>['index','edit']]);

});


/* Admin Area Routes Group Two Middleware of Authenticated and Admin Roles */
Route::group(['prefix' => 'admin','namespace'=> 'Admin','middleware'=>['auth','role']], function()
{
    Route::get('/',['uses'=>'HomeController@index','as'=>'admin']); //  /admin route

});

/* Authentication namespace */
Route::group(['prefix'=>'auth','namespace'=>'Auth'],function(){

    // Authentication routes...
    Route::get('login',['as'=>'auth.login','uses'=>'AuthController@getLogin']);
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout',['as'=>'auth.logout','uses'=>'AuthController@getLogout']);

    // Registration routes...
    Route::get('register', ['as'=>'auth.register','uses'=>'AuthController@getRegister']);
    Route::post('register', 'AuthController@postRegister');

});




//Route::get('authors',AuthorsController@index));
