<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\best1;

class Best1Controller extends Controller
{
    public function create ()
    {
        return view('pages.best1');
    }

    public function store (Request $request)
    {
        $best1 = new Best1;
        $best1->name = $request->input('name');
        $best1->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $best1->image = $filename;
        }
        $best1->save();
        return redirect()->back()->with('status', 'Best1seller product added successfully!');
    }
}
