<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CropController extends Controller
{
    public function index()
    {
    	return view('jcrop.index');
    }

    public function upload(Request $request)
    {
    	$file = $request->file('file');
    	$name = $file->getClientOriginalName();
    	$img = Image::make($file)->save(public_path() .'/upload/'. $name);
    	return $name;
    }
}
