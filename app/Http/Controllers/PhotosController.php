<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller {

    public function index()
    {
        $photos = Photo::all();
        return view('index',compact($photos));
        //return view('home');
    }

    public function getPhoto($id)
    {
        $photo = Photo::find($id);
        //if (is_null($photos)) {
        //    abort(404);
        //}
        return $photo;
    }

    public function getForm()
    {
        return view('addphoto');
    }

}
