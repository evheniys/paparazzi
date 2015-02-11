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
        //$photos = Photo::latest()->get();
        $photos = Photo::all();
       //print_r($photos);
        //foreach ($photos as $photo) {
            //echo $photo->title;
            //print_r ($photo);
        //}

        //dd($photos);
       return view('index',compact('photos'));
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

        $tfile = Request::file();



        if (Request::hasFile('photofile')) {

            $allowedext = array("png", "jpg", "jpeg");
            $photof = Request::file('photofile');
            $destinationPath = 'images';
            $filename = $photof->getClientOriginalName();
            $extension = $photof->getClientOriginalExtension();

            if (in_array($extension, $allowedext)) {
                $photo = Request::all();
                $upload_success = Request::file('photofile')->move($destinationPath, $filename);
                $photo['photofile'] = $upload_success->getPathname();
            }

            $photo['published_at'] = Carbon::now();


        }

        Photo::create($photo);
        return redirect('/');
    }
}
