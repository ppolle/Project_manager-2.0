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

Route::get('/',  function () {
    return view('welcome');

Route::get('users', function()
{
    return 'Users!';
});

Route::get('login',function()
{
 return "This is the official login page";
});

Route::get('auth/github',
    ['as'=>'githublogin',
        'uses'=> 'Auth\AuthController@redirectToProvider']);

