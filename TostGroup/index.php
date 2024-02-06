<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .login
      {
        position: absolute;
        z-index: 1;
        border-radius: 3px;
        background-color: white;
        width: 400px;
        margin-left: 35%;
        top:200px;
        display: none;
      }
      .signin
      {
        position: absolute;
        z-index: 1;
        border-radius: 3px;
        background-color: white;
        width: 400px;
        margin-left: 35%;
        top:200px;
        display: none;
      }
      #a
      {
        text-decoration:none;
        color:black;
      }
      .my-4
      {
        list-style-type: none;
      }
      .name
      {
        display: none;
      }
      .password
      {
        display: none;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
        <a href="" class="navbar-brand">TOST GROUP</a>
        <ul class="float-end nav">
            <li class="nav-item"><button onclick="login()" type="button" class="nav-link btn btn-white">Login</button></li>
            <li class="nav-item"><button onclick="signin()" type="button" class="nav-link btn btn-white">Register</button></li>
        </ul>
    </nav> 
  <div class="container-fluid bg-light">


    <section class="text-center py-3">
        <h1 class="">Software Development Trainings</h1>
        <div class="row justify-content-center m-2">
            <div class="col-1"><h3><u>Mode:</u></h3></div> <div class="col-2 mt-2"><u><h5>Physical & Online</h5></u></div>  
        </div>
        <div class="row d-block m-5">
            <div class="col my-5">
                <h2><li>Front-End</li></h2>
                <ul class="my-4">
                    <li><u><b>Html</b></u></li>
                    <li><u><b>Css</b></u></li>
                    <li><u><b>Bs</b></u></li>
                    <li><u><b>Javascript</b></u></li>
                </ul>
            </div>
            <div class="col my-5">
                <h2><li>Back-End</li></h2>
                <ul class="my-4">
                    <li><u><b>PHP</b></u></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="card signin" id="signin">
        <div class="card-header"><button type="button" onclick="closee()" class="float-end">Close</button></div>
        <div class="card-body">
        <form action="index.php" method="POST" onsubmit="errors()">
            <div class="my-2">
                <label for="">Name:</label> <br>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="my-2">
                <label for="">Password:</label> <br>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" name="signin" class="btn btn-primary my-3">
        </form>
        <p>Already registered? <span class="border-start border-dark ms-3"><button type="button" onclick="login()" class="nav-link btn btn-white d-inline">Login</button></span></p>
        </div>
    </div>
    <div class="card login" id="login">
    <div class="card-header"><button type="button" onclick="closee()" class="float-end">Close</button></div>
    <div class="card-body">
    <form action="">
            <div class="my-2">
                <label for="">Name:</label> <br>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="my-2">
                <label for="">Password:</label> <br>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary my-3">
        </form>
        <p>Not yet registered? <span class="border-start border-dark ms-3"><button type="button" onclick="signin()" class="nav-link btn btn-white d-inline">Register</button></span></p>
    </div>
    </div>


<?php include 'includes/footer.php'; ?>