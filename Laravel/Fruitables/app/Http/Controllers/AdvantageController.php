<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advantage;

class AdvantageController extends Controller
{
   

    public function create ()
    {
        return view('pages.advantage');
    }

    public function store (Request $request)
    {
        $advantage = new Advantage;
        $advantage->icon = $request->input('icon');
        $advantage->title = $request->input('title');
        $advantage->description = $request->input('description');
        
        $advantage->save();
        return redirect()->back()->with('status', 'Advantage added successfully!');
    }
}
