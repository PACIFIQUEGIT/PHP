@extends('layouts.layout')

@section('content')

<div class="container w c">
    <h1>Create a product</h1>
  <form action="/products" method="POST">
    @csrf
    <div>
    <label for="name">Your name:</label> <br>
    <input type="text" name="name" id="name" required>
    </div> <br>
    <div>
    <label for="name">Your email:</label> <br>
    <input type="email" name="email" id="email" required>
    </div> <br>
    <div>
    <label for="product">Product:</label> <br>
    <input type="text" name="product" id="product" required>
    </div> <br>
    <div>
    <input type="submit" value="Save the product">
    </div>
  </form>
</div>

@endsection