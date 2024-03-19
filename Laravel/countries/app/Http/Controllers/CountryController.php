<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Profile;

class CountryController extends Controller
{
    public function index1()
    {
        $country = Country::all();
        
        // Return both views
        return view('countries', ['country' => $country]);
    }

    public function index2()
    {
        $country = Country::all();
        
        // Return both views
        return view('profile', ['country' => $country]);
    }

    public function store()
{
    
    $profile = new Profile();
    $profile->name = request('name');
    $profile->email = request('email');
    $profile->phone = request('phone');
    $profile->save();

    return redirect('profile')->with('mssg', 'Profile created successfully!');
}

}
