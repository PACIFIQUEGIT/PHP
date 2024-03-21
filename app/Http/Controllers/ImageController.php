<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    
    public function create ()
    {
        return view('pages.image');
    }

    public function store (Request $request)
    {
        $image = new Image;
        $image->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $image->image = $filename;
        }
        $image->save();
        return redirect()->back()->with('status', 'Image added successfully!');
    }
}
