@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid ms-0 ps-0">
        <div id="aside" class="column mx-0">
            <div class="container p-4 pb-5 mb-4">
                <div class="row text-white border-top py-3 ">
                    <h6><i class='bx bxs-dashboard'></i> DASHBOARD</h6>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b>INTERFACE</b></p>
                    <p><a href="{{ url('/pages/image') }}">Images</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/advantage') }}">Advantages</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/fruit') }}">Fruits</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/offer') }}">Offers</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/vegetable') }}">Vegetables</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/best') }}">Bests</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/best1') }}">Best1s</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/number') }}">Numbers</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a href="{{ url('/pages/testimonial') }}">Testimonies</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b><a href="{{ url('/') }}">Welcome</a></b></p>
                    <p><i class='bx bxs-folder'></i> Pages <span class="float-end"><i class='bx bx-chevron-right'></i></span></p>
                    <p><i class='bx bx-line-chart'></i> Charts</p>
                    <p><i class='bx bx-table' ></i> Tables</p>
                </div>
                <div class="row text-white border-top py-3 pb-5 mb-5">
                <button id="btn" class="btn rounded-circle p-0"><i class='bx bx-chevron-left'></i></button>
                </div>
            </div>
        </div>
</div>
@yield('contenti')
@yield('contenta')
@yield('contentf')
@yield('contento')
@yield('contentv')
@yield('contentb')
@yield('contentb1')
@yield('contentn')
@yield('contentt')
@endsection
