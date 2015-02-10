<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Photo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Request;

class PhotosController extends Controller {

    public function index()
    {
        $photos = Photo::latest()->get();
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

    public function storePhoto()
    {

        $filename = "";
        $extension = "";
        if (\Input::hasFile('photofile')) {
            $allowedext = array("png", "jpg", "jpeg");
            $photof = \Input::file('photofile');
            $destinationPath = public_path() . '/uploads';
            $filename = str_random(12);
            $extension = $photof->getClientOriginalExtension();
            if (in_array($extension, $allowedext)) {
                $upload_success = \Input::file('photofile')->move($destinationPath, $filename . '.' . $extension);
                print_r($upload_success->pathName);
            }
            $photo = Request::all();
            $photo['published_at'] = Carbon::now();
            $photo['photofile'] = $upload_success;

        }
        //print_r($photo);
        //Photo::create($photo);
        //return redirect('/');
    }
}
