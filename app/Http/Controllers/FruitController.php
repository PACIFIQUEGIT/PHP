<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function create ()
    {
        return view('pages.fruit');
    }

    public function store (Request $request)
    {
        $fruit = new Fruit;
        $fruit->name = $request->input('name');
        $fruit->description = $request->input('description');
        $fruit->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $fruit->image = $filename;
        }
        $fruit->save();
        return redirect()->back()->with('status', 'Fruit added successfully!');
    }
}
