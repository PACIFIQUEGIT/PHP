<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advantage;
use App\Models\Image;
use App\Models\Fruit;
use App\Models\Offer;
use App\Models\Vegetable;
use App\Models\best;
use App\Models\best1;
use App\Models\Number;
use App\Models\Testimonial;


class WelcomeController extends Controller
{
    public function index()
    {
        // Fetch advantage
        $advantage = Advantage::all();

        // Fetch image
        $image = Image::all();

        $fruit = Fruit::all();

        $offer = Offer::all();

        $vegetable = Vegetable::all();

        $best = Best::all();

        $best1 = Best1::all();

        $number = Number::all();

        $testimonial = Testimonial::all();

        // Pass both sets of data to the view
        return view('welcome', 
        [
            'advantage' => $advantage, 
            'image' => $image, 
            'fruit' => $fruit,
            'offer' => $offer,
            'vegetable' => $vegetable,
            'best' => $best,
            'best1' => $best1,
            'number' => $number,
            'testimonial' => $testimonial
        ]);
    }
}
