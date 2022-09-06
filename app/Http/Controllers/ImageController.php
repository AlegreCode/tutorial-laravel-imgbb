<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Illuminate\Http\Request;
use Infotech\ImgBB\ImgBB;

class ImageController extends Controller
{
    public function save(Request $request, SweetAlertFactory $flasher)
    {
        $data = ImgBB::image($request->file('fileimage'));
        $image = new Image();
        $image->title = $request->title;
        $image->url = $data['data']['url'];
        $image->save();

        $flasher->addSuccess("La imágen ha sido guardado con éxito!");

        return redirect()->route('home');
    }

    public function show()
    {
        $data = Image::all();
        return view('home', ['images' => $data]);
    }
}
