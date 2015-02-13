<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Photo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Request;

class PhotosController extends Controller {

    public function index()
    {
        $photos = Photo::latest()->get();
        //$photos = Photo::all();
       //print_r($photos);
       /* foreach ($photos as $photo) {
            if (!isset($photo->photothumb) or is_null($photo->photothumb) or $photo->photothumb =='' ) {
                $photo->photothumb = str_replace('Gallery','Gallery/thumb',$photo->photofile);
                $photo->save();
            }
        }*/
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


        if (Request::hasFile('photofile')) {

            $allowedext = array("png", "jpg", "jpeg");
            $photof = Request::file('photofile');
            $destinationPath =  'Gallery';
            $filename = 'PaparazziFeelGood_'.$photof->getClientOriginalName();
            $extension = $photof->getClientOriginalExtension();

            if (in_array($extension, $allowedext)) {
                $photo = Request::all();
                if(!File::exists(public_path().'/'.$destinationPath)) {
                    if(!File::makeDirectory(public_path().'/'.$destinationPath)) {
                        abort(503);
                    }
                }
                $upload_success = Request::file('photofile')->move(public_path().'/'.$destinationPath, $filename);
                $photo['photofile'] = $destinationPath.'/'.$upload_success->getFilename();
                $photo['published_at'] = Carbon::now();
                Photo::create($photo);

            }



        }
        return redirect('/photo/add');


    }
}
