<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        // get value and validate file
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'text' => 'required',
            // 'gallery_image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);
        @dd($request);
        // get value image
        // $image = $request->file('gallery_image');
        // $image_name = $image->hashName();
        // $targetDir = 'storage\img-product/';
        // $image_store = ($targetDir.$image_name);

        // save to local storage
        // storage::disk('local')->put('public/img-product/',$image);

        // save to DB
        $files = new feedback ([
            'name' => $request->name,
            'role' => $request->role,
            'feedback' => $request->text,
        ]);
        $files->save();
        return redirect()
        ->route('dashboard')
        ->with('succes', 'Upload file berhasil');
    }
}
