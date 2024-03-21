@extends('layouts.app')

@section('content')

<div class="container">

    {!! QrCode::size(256)->generate(url('/home')) !!}

</div>

@endsection
