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
            'feedback' => 'required',
            // 'gallery_image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        // get value image
        // $image = $request->file('gallery_image');
        // $image_name = $image->hashName();
        // $targetDir = 'storage\img-product/';
        // $image_store = ($targetDir.$image_name);

        // save to local storage
        // storage::disk('local')->put('public/img-product/',$image);

        // save to DB
        $feedbacks_store = new feedback ([
            'name' => $request->name,
            'role' => $request->role,
            // 'img_name' => $image_store,
            'feedback' => $request->text,
        ]);
        
        $feedbacks_store->save();
        return redirect()
        ->route('index')
        ->with('succes', 'berhasil');
    }
}
