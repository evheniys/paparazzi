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
Route::get('/photo/add', array('as' => 'create_photo_form','uses' => 'PhotosController@getForm'));
Route::get('/photo/{id}', 'PhotosController@getPhoto');
Route::post('/photo/add', 'PhotosController@storePhoto');
Route::get('/Gallery/thumb/{path}', function($path)
{
    $img_path = 'public/Gallery/'.$path;
    $img = Image::make($img_path);
    $img->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $response = Response::make($img->encode('jpg'));
    $response->header('Content-Type', 'image/jpg');
    return $response;
});


