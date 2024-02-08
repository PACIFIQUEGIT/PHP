<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        top:150px;
        display: none;
        <?php
        if(isset($_SESSION['prevent2'])){
        ?>
        <?php echo $_SESSION['prevent2']; ?>
        <?php
        unset($_SESSION['prevent2']);
        };  
        ?>;
      }
      .signin
      {
        position: absolute;
        z-index: 1;
        border-radius: 3px;
        background-color: white;
        width: 400px;
        margin-left: 35%;
        top:59px;
        display: none;
        <?php
        if(isset($_SESSION['prevent1'])){
        ?>
        <?php echo $_SESSION['prevent1']; ?>
        <?php
        unset($_SESSION['prevent1']);
        };  
        ?>;
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
      ul.nav
      {
        position:fixed;
        right:0;
      }
      .navbar-brand
      {
        position:fixed;
        left:0;
      }
      .mt-2 li
      {
        list-style-type: none;
      }
      #sect1
      {
        float:left;
        width:50%;
      }
      #sect2
      {
        float:right;
        width:50%;
        margin-bottom:100px;
      }
      #p
      {
        color:blue;
        font-size:70px;
        font-weight: bolder;

      }
      nav
      {
        position:fixed;
        z-index: 2;
      }
      .dropdown-header
      {
        font-size:15px;
        color:blue;
      }
      #b1
      {
        height:50px;
        width:50px;
        margin-top:270px;
      }
      #b2
      {
        height:50px;
        width:50px;
        margin-top:270px;
      }
      .card-img-overlay
      {
        margin-top:180px;
        margin-left:50px;
      }
      #im
      {
        opacity:.9,9;
      }
      #p1 
      {
        color:blue;
        font-size:18px;
      }
      ol.nav
      {
        position:fixed;
      }
      #ftra 
      {
        color:white;
        font-size:15px;
        text-decoration:none;
      }
      #btn
      {
        position: fixed;
        z-index: 5;
        bottom: 20px;
        right: 30px;
        height: 40px;
        width: 40px;
        display: none;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg justify-content-center fixed-top bg-white py-4">      
        <a href="index.php" class="navbar-brand">TOST GROUP SD</a>
        <ol class="nav">
        <li class="nav-item"><a href="index.php" class="nav-link btn btn-white">Home</a></li> 
        <li class="nav-item"><a href="" class="nav-link btn btn-white">About</a></li>
        <li class="nav-item"><a href="" class="nav-link btn btn-white">Courses</a></li>
        <li class="nav-item dropdown">
          <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle btn btn-white">Pages</a>
          <ul class="dropdown-menu">
          <li><a id="a" class="dropdown-item" href="tel: +250 788 844 934"><i class='bx bxs-phone-call'></i> +250 788 844 934</a></li>
          <li><a id="a" class="dropdown-item" href="mailto: info@tostgroup.com"><i class='bx bxs-envelope' ></i> info@tostgroup.com</a></li>
          <li><a id="a" class="dropdown-item" target=_blank href="https://tostgroup.com/"><i class='bx bx-globe'></i> tostgroup.com</a></li>
          </ul>
        </li>  
        <li class="nav-item"><a href="" class="nav-link btn btn-white">Contact</a></li>    
        </ol>
        <ul class="nav">
            <li class="nav-item"><button onclick="login()" type="button" class="nav-link btn btn-white">Log in</button></li>
            <li class="nav-item"><button onclick="signin()" type="button" class="nav-link btn btn-white">Register</button></li>
        </ul>
  </nav>
  