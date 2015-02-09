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

Route::get('/', 'PhotosController@index');
Route::get('/photo/{id}', 'PhotosController@getPhoto');
Route::get('/createphoto', array('as' => 'create_photo_form','uses' => 'PhotosController@getForm'));
