@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($user)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Role:</strong>
        @if(!empty($user->getRoleNames())) <!-- Check if the user has any roles -->
            @foreach($user->getRoleNames() as $v) <!-- Iterate over each role -->
                <label class="badge bg-success">{{ $v }}</label> <!-- Display the role using a Bootstrap badge -->
            @endforeach
        @endif
    </div>
</div>

    </div>
@else
    <div class="alert alert-danger">User not found.</div>
@endif

@endsection