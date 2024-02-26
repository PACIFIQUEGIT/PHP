@extends('layouts.layout')

@section('content')
    <h2>New Product Created</h2>
    <p>Congratulations {{ $product->name }}, you have successfully created your product ({{ $product->product }}).</p>
    <p>Thank you!</p>
@endsection

