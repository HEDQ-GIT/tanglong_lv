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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'WelcomeController@index');

Route::group(['prefix' => LL::setLocale()], function () {

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

    /**
     * DQ-
     */
    get('/', 'WelcomeController@index');

    get('works', 'WelcomeController@works');
    post('works/getWorks/{id}', 'WelcomeController@getWorks');
    post('works/getWorkDetails', 'WelcomeController@getWorkDetails');

    get('services', 'WelcomeController@services');
    get('about', 'WelcomeController@about');

    get('promotions', 'WelcomeController@promotions');

    get('contact', 'WelcomeController@contact');
    post('contact/email/', 'WelcomeController@email');
    get('contact/email/', 'WelcomeController@email');


    get('play', 'WelcomeController@play');


});