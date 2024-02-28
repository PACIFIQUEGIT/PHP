<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vegetable;

class VegetableController extends Controller
{
    public function create ()
    {
        return view('pages.vegetable');
    }

    public function store (Request $request)
    {
        $vegetable = new Vegetable;
        $vegetable->name = $request->input('name');
        $vegetable->description = $request->input('description');
        $vegetable->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $vegetable->image = $filename;
        }
        $vegetable->save();
        return redirect()->back()->with('status', 'Vegetable added successfully!');
    }
}
