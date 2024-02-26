<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\ProductCreated;
use Illuminate\Support\Facades\Mail;



class ProductController extends Controller
{

    public function create ()
    {
        return view('/products/create');
    }

    public function store()
    {
        $product = new Product;

        $product->name = request('name');
        $product->email = request('email');
        $product->product = request('product');

        $product->save();

        Mail::to(request('email'))->send(new ProductCreated($product));

        return redirect('/')->with('mssg', 'Product created successfully!');
    }
}
