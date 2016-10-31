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

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', 'User\QuesionerController@getQuestions');
    Route::post('/', 'User\QuesionerController@postQuestions');
});

Route::get('/checkUser/{email}', 'User\QuesionerController@checkUser');

Route::get('/home', 'User\QuesionerController@index');

Route::get('/try', 'User\QuesionerController@tryPost');

/*
  |--------------------------------------------------------------------------
  | API routes
  |--------------------------------------------------------------------------
 */

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//Route::get('/home', 'HomeController@index');

Route::resource('questions', 'QuestionsController');

Route::resource('userQuestions', 'UserQuestionsController');

Route::resource('categories', 'CategoriesController');

Route::resource('subCategories', 'SubCategoriesController');

Route::resource('users', 'UsersController');
