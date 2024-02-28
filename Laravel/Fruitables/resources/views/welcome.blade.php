@extends('layouts.layout')

@section('content')
<div class="container-fluid ok px-0 mx-0">
<div id="about" class="container-fluid">
<div class="row justify-content-center mt-5 pt-5">
<div class="col-md-6 mt-5 text-white">
    <p style="color:orange;font-size:28px;">100% Organic Foods</p>
    <p><span style="font-size:50px;color:green;"><b>Organic Veggies & Fruits Foods</b></span></p>
    <form action="">
    <div class="form-floating border border-warning d-flex bg-white btn-group rounded-pill">
    <input type="text" class="form-control border-0 rounded-pill text-secondary" id="search" name="search" placeholder="Search">
    <label for="search" class="text-secondary">Search</label>
    <button type="submit" class="btn btn-success rounded-pill border border-warning ">Submit Now</button>
    </div>
  </form>
</div>
<div class="col-md-6">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
  @foreach($image as $item)
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
      <img id="im" src="{{ asset('img/'.$item->image) }}" alt="New York" class="d-block" style="width:100%;">
        <div class="card-img-overlay text-center  mx-auto">
                  <p class="card-text text-white mx-auto p-auto"><b>{{ $item->description }}</b></p>
        </div>  
    </div> 
  @endforeach
  </div>

    <button class="carousel-control-prev rounded-circle bg-success " type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </button>
    <button  class="carousel-control-next rounded-circle bg-success" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    </button>
</div>
</div>
</div>
</div>

<div class="container-fluid my-5 pt-3">
  <div class="justify-content-around row mt-5">
  @foreach($advantage as $item)
    <div id="dib" class="text-center col-md-2 py-4">
      <p id="cb"><i class="{{$item->icon}}"></i></p>
      <h5>{{$item->title}}</h5>
      <p>{{$item->description}}</p>
    </div>
  @endforeach
  </div>
</div>

<div class="container my-5">
  <h1>Our Organic <br> Product</h1>
  <div class="row mt-5 justify-content-around">
  @foreach($fruit as $item)
    <div class="col-md-3 mb-4">
    <div class="card border border-warning">
      
      <div class="card-header p-0">
      <div style="background-image:url('img/{{ $item->image }}');" id="bgcs3a">
        <div id="btng" class="btn-group">
          <p class="btn btn-warning">Fruits</p>
        </div>
      </div>
      </div>
      <div class="card-body">
      <p><b>{{ $item->name }}</b></p>
      <p>{{$item->description }}</p>
      <p><b>{{$item->price}}</b></p>
      <a class="p-3 cart btn btn-warning bg-white rounded-pill" href="#"><i class='bx bxs-shopping-bag' ></i> Add to cart</a>
      </div>
      
    </div>
    </div> 
  @endforeach  
  </div>
</div>

<div class="container text-center my-5">
  <div class="row mt-5 justify-content-between">
  @foreach($offer as $item)
    <div id="bgcs3d" class="col-md">
       <div  class="card">
         <div  class="card-header p-0">
           <div id="bgcs3dh" class="text-center" style="background-image:url('img/{{ $item->image }}');" >
             <div id="btnga" class="px-1 text-center border border-warning">
             <p><b>{{ $item->title }}</b></p>
             <p><b>{{ $item->description }}</b></p>
             </div>
           </div>
         </div>
         <div id="bgcs3db" class="card-body bg-secondary">
         </div>
       </div>
    </div>
  @endforeach  
  </div>  
</div>

<div class="container my-5">
  <h1>Fresh Organic Vegetables</h1>
  <div class="row mt-5 justify-content-around">
  @foreach($vegetable as $item)
    <div class="col-md-3 mb-4">
    <div class="card border border-success">
      <div class="card-header p-0">
      <div style="background-image:url('img/{{ $item->image }}');" id="bgcs3a">
        <div id="btngv" class="btn-group">
          <p class="btn btn-success">Vegetables</p>
        </div>
      </div>
      </div>
      <div class="card-body">
      <p><b>{{ $item->name }}</b></p>
      <p>{{$item->description }}</p>
      <p><b>{{$item->price}}</b></p>
      <a class="p-3 cart btn btn-warning bg-white rounded-pill" href="#"><i class='bx bxs-shopping-bag' ></i> Add to cart</a>
      </div>
    </div>
    </div> 
  @endforeach  
  </div>
</div>

<div class="container-fluid bg-warning">
<div class="row justify-content-center mt-5">
<div class="col-md-6 text-white">
    <p style="color:white;font-size:70px;"><b>Fresh Exotic <br> Fruits</b></p>
    <p><span class="text-secondary" style="font-size:90px;">in Our Store</span></p>
    <p class="text-secondary">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
    <a class="btn border border-white rounded-pill text-secondary" href="#">BUY</a>
</div>
<div id="pd" class="col-md-6">
<img src="img/15.png" alt="">
<div id="p" style="width:135px; height:135px;" class="card-img-overlay text-secondary text-center bg-white rounded-circle btn-group">
<p style="font-size: 30px;"><span style="font-size: 80px;"><strong>1</strong></span>kg</p><p style="font-size: 30px;margin-left:-30px;margin-top:35px"><sup><strong>$50</strong></sup></p>
</div>
</div>
</div>
</div>

<div class="container-fluid mt-5 pt-3 text-center">
<h1 style="font-size:55px;"><b>Bestseller Products</b></h1>
<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
  <div class="justify-content-around row mt-5">
  @foreach($best as $item)
    <div class="col-md-3 m-2">
      <div class="row">
      <div id="dib1"class="text-center col">
      <img id="im" src="{{ asset('img/'.$item->image) }}" alt="New York" class="rounded-circle" width="120px" height="120px">
      
    </div>
    <div id="dib1"class="text-center col">
      <h5>{{$item->name}}</h5>
      <span style="font-size: 10px;">
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class="bx bxs-star text-secondary"></span>
        </span>
      <p><b>{{$item->price}}</b></p>
      <a class="p-3 cart btn btn-warning bg-white rounded-pill" href="#"><i class='bx bxs-shopping-bag' ></i> Add to cart</a>
    </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

<div class="container-fluid mb-5 pt-3 text-center">
  <div class="justify-content-around row mt-5">
  @foreach($best1 as $item)
    <div class="col-md-2">
      <div class="row">
      <div class="text-center col-md py-4 px-0">
      <img src="{{ asset('img/'.$item->image) }}" alt="New York" class=" mx-0 rounded-3" width="270px" height="180px">
   
      <h5>{{$item->name}}</h5>
      <span style="font-size: 10px;">
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class="bx bxs-star text-secondary"></span>
        </span>
      <p><b>{{$item->price}}</b></p>
      <a class="p-3 cart btn btn-warning bg-white rounded-pill" href="#"><i class='bx bxs-shopping-bag' ></i> Add to cart</a>
    </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

<div class="container-fluid my-5 pt-3">
  <div id="dib2" class="justify-content-around row mx-3 mt-5 p-3">
  @foreach($number as $item)
    <div id="dib3"  class="text-center col-md-2 py-4">
      <p id="cb"><i class="{{$item->icon}}"></i></p>
      <p style="font-size:26px;" class="text-success">{{$item->title}}</p>
      <p><strong>{{$item->description}}</strong></p>
    </div>
  @endforeach
  </div>
</div>

<div class="container-fluid my-5 pt-3 text-center">
<p style="font-size:28px;" class="text-success">Our Testimonial</p>
<h1 style="font-size:55px;"><b>Our Client Saying!</b></h1>
  <div class="justify-content-around row mt-5">
  @foreach($testimonial as $item)
    <div id="dib1" class="col-md-5 m-2">
      <div class="row">
      <p>{{$item->description}}</p>
      </div>
      <hr style="border:2px solid;" class="text-warning">
      <div class="row">
      <div class="text-center col">
      <img style="float:left;" src="{{ asset('img/'.$item->image) }}" alt="New York" class="rounded-circle" width="120px" height="120px">
      <div class="ms-2">
      <h5>{{$item->name}}</h5>
      <p>{{$item->profession}}</p>
      <span style="font-size: 10px;" class="text-danger">
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class='bx bxs-star text-success'></span>
            <span style="font-size: 20px;" class="bx bxs-star text-secondary"></span>
        </span>
      </div>
      </div>
      <div id="dib1"class="text-center col">
      <p style="font-size:100px;" class="text-warning m-0">"</p>
      </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

<footer class="bg-secondary text-white mt-5">
<div class="mx-5 px-5 pt-5 row justify-content-around">
  <div class="col">
    <h1 class="text-success">Fruitables</h1>
    <p class="text-warning">Fresh products</p>
  </div>
  <div class="col">
  <form action="">
    <div class="form-floating d-flex bg-white rounded-pill">
    <input type="text" class="form-control border-0 text-secondary rounded-pill" id="email" name="email" placeholder="Your email">
    <label for="email" class="text-secondary">Your Email</label>
    <button type="submit" class="btn btn-success rounded-pill">Subscribe Now</button>
    </div>
  </form>
  </div>
  <div class="col text-end">
  <a class="btn border border-warning rounded-circle text-warning"><i class='bx bxl-twitter'></i></a>
  <a class="btn border border-warning rounded-circle text-warning"><i class='bx bxl-facebook'></i></a>
  <a class="btn border border-warning rounded-circle text-warning"><i class='bx bxl-youtube'></i></a>
  <a class="btn border border-warning rounded-circle text-warning"><i class='bx bxl-linkedin'></i></a>
                    
  </div>
</div>
<div class="container"><hr style="border:2px solid;" class="text-warning"></div>
<div class="mx-5 p-5 row justify-content-around">
<div  class="col-md-3">
<h4>Why People Like us!</h4>  
<p class="text-light">typesetting, remaining<br>
essentially unchanged. It was<br>
popularised in the 1960s with<br>
the like Aldus PageMaker<br>
including of Lorem Ipsum.</p>
<a class="p-2 cart btn btn-warning bg-secondary rounded-pill" href="#">Read More</a>
</div>
<div  class="col-md-3">
<h4>Shop Info</h4>
<a class="text-light" href="">About Us</a> <br>
<a class="text-light" href="">Contact Us</a> <br>
<a class="text-light" href="">Privacy Policy</a> <br>
<a class="text-light" href="">Terms & Condition</a> <br>
<a class="text-light" href="">Return Policy</a> <br>
<a class="text-light" href="">FAQs & Help</a>
</div>
<div  class="col-md-3">
  <h4>Account</h4>
<a class="text-light" href="">My Account</a> <br>
<a class="text-light" href="">Shop Details</a> <br>
<a class="text-light" href="">Shopping Cart</a> <br>
<a class="text-light" href="">Wishlist</a> <br>
<a class="text-light" href="">Order History</a> <br>
<a class="text-light" href="">International Orders</a>
</div>
<div  class="col-md-3">
  <h4>Contact</h4>
  <p>Address: 1429 Netus Rd, NY 48247</p>
  <p>Email: Example@gmail.com</p>
  <p>Phone: +0123 4567 8910</p>
  <p>Payment Accepted</p>
  <p style="font-size:30px;"><i class='bx bxl-visa' ></i> <i class='bx bxl-mastercard' ></i> <i class='bx bxl-mastercard' ></i> <i class='bx bxl-paypal' ></i></p>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <p>© <u>Your Site Name</u>, All right reserved.</p>
    </div>
    <div class="col-md-6">
      <p>Designed By Pacifique Distributed By ...</p>
    </div>
  </div>
</div>
<button id="btn" onclick="topbtn()" class="btn btn-success rounded-circle text-white"><i class='bx bx-up-arrow-alt'></i></button>
</footer>
</div>
@endsection