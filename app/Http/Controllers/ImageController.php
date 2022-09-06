<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Infotech\ImgBB\ImgBB;

class ImageController extends Controller
{
    public function save(Request $request)
    {
        $data = ImgBB::image($request->file('fileimage'));
        $image = new Image();
        $image->title = $request->title;
        $image->url = $data['data']['url'];
        $image->save();

        return redirect()->route('home');
    }

    public function show(Request $request)
    {
        $data = Image::all();
        return view('home', ['images' => $data]);
    }
}
