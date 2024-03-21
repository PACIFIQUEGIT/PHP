<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function create ()
    {
        return view('pages.testimonial');
    }

    public function store (Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->name = $request->input('name');
        $testimonial->profession = $request->input('profession');
        $testimonial->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $testimonial->image = $filename;
        }
        
        $testimonial->save();
        return redirect()->back()->with('status', 'Testimony added successfully!');
    }
}
