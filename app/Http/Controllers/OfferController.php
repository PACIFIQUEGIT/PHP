<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function create ()
    {
        return view('pages.offer');
    }

    public function store (Request $request)
    {
        $offer = new Offer;
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Use original file name
            $file->storeAs('public/img', $filename); // Store with original file name
            $offer->image = $filename;
        }
        $offer->save();
        return redirect()->back()->with('status', 'Offer added successfully!');
    }
}
