<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['middleware' => 'fun','as'=>'home','uses' => 'home@index']);

//Route::get('/',array('as'=>'Home','uses'=>'home@index'));

Route::get('authors', array('middleware'=>'auth','as'=>'authors','uses'=>'authors@index'));

Route::get('author/{id}',array('as'=>'authordetail', 'uses'=>'authors@detailview'));

Route::get('home',array('middleware' => 'fun' ,'as'=>'home','uses'=>'home@index'));

/*Resources */

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('api/todo','api\todo',['only'=>['index','show']]);
    Route::resource('api/users','api\users',['only'=>['index','edit']]);

    Route::get('profile',['as'=>'profile', 'uses'=> 'profileController@index']);
    Route::post('profile/{id}',['as'=>'profile.update','uses'=>'profileController@update']);

});

/*End Resources*/

/*
Route::get('authors/{id}', function ($id) {
    return View::make('authors.index')->with('id',$id);
});
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
//


// Administrator Routes
Route::get('admin',['middleware'=>'auth', 'as'=>'admin.dashboard','uses'=>'Admin\dashboard@index']);

//


//Route::get('authors',AuthorsController@index));
