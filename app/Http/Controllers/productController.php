<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        // get value and validate file
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'gallery_image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        // get value image
        $image = $request->file('gallery_image');
        $image_name = $image->hashName();
        $targetDir = 'storage\img-product/';
        $image_store = ($targetDir.$image_name);

        // save to local storage
        storage::disk('local')->put('public/img-product/',$image);

        // save to DB
        $article_files = new product ([
            'name' => $request->title,
            'location' => $request->location,
            'img_name' => $image_store,
            'price' => $request->price,
        ]);
        
        $article_files->save();
        return redirect()
        ->route('product.index')
        ->with('succes', 'Upload file berhasil');
    }
}
