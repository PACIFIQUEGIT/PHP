<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class NumberController extends Controller
{
    public function create ()
    {
        return view('pages.number');
    }

    public function store (Request $request)
    {
        $number = new Number;
        $number->icon = $request->input('icon');
        $number->title = $request->input('title');
        $number->description = $request->input('description');
        
        $number->save();
        return redirect()->back()->with('status', 'Number added successfully!');
    }
}
