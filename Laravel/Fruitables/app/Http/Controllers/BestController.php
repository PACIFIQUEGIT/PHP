<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\best;

class BestController extends Controller
{
    public function create ()
    {
        return view('pages.best');
    }

    public function store (Request $request)
    {
        $best = new Best;
        $best->name = $request->input('name');
        $best->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $best->image = $filename;
        }
        $best->save();
        return redirect()->back()->with('status', 'Bestseller product added successfully!');
    }
}
