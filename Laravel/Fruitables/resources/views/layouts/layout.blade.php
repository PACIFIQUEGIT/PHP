<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container pos">
                <a style="font-size:40px;" class="navbar-brand text-success" href="{{ url('/') }}">
                    <b>Fruitables</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop Detail</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a id="a" class="dropdown-item" href="#">Cart</a></li>
          <li><a id="a" class="dropdown-item" href="#">Chackout</a></li>
          <li><a id="a" class="dropdown-item" href="#">Testimonial</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
                </ul>

                <div class="d-flex me-0 b text-success">
                    <button class="btn border border-warning text-success rounded-circle bg-white">
                    <i class='bx bx-search'></i>
                    </button>
                    <a href="#"><i class='bx bxs-shopping-bag text-success'><span class="badge rounded-pill text-dark bg-warning">3</span></i></a>
                    <a href="#"><i class='bx bxs-user text-success' ></i></a>
                </div>
                </div>
            </div>
            <ul class="navbar-nav m-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                  </ul>
        </nav>

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
      function signin() 
      {
        document.getElementById("signin").style.display="block";
        document.getElementById("login").style.display="none";
        document.getElementById("res").value="";
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      function login() 
      {
        document.getElementById("login").style.display="block";
        document.getElementById("signin").style.display="none";
        document.getElementById("res").value="";
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      function closee()
      {
        document.getElementById("login").style.display="none";
        document.getElementById("signin").style.display="none";
      }
      
      const button = document.getElementById('btn');
      window.onscroll = function() {showbtn()};
      function showbtn() 
      {
        const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        if(scrollTop > 50)
            {button.style.display = 'block';} 
            else {button.style.display = 'none';}
      }
      function topbtn() 
      {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      document.addEventListener("DOMContentLoaded", function() 
      {
      var currentUrl = window.location.href;

      var links = document.querySelectorAll('.nav-link');

          links.forEach(function (link) 
          {
            if (link.href === currentUrl) 
            {
               link.classList.add('active');
            }
          }
          );
       }
       );
    </script>
      </body>
</html>
