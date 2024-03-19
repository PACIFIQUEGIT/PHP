@extends('layouts.layout')

@section('content')
          <div class="container w">
            <div><h1><u>Products</u></h1></div>
            <p class="mssg">{{ session('mssg') }}</p>
            <a href="{{ route('products.create') }}">Add a product</a>
          </div>
@endsection

