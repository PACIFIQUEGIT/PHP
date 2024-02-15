<?php
require('code.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Hello, world!</title>
    <style>
      #fts
      {
        font-size: 13px;
      }
      .login
      {
        position: absolute;
        z-index: 1;
        border-radius: 3px;
        background-color: white;
        width: 400px;
        align-items: center;
        justify-content: center;
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
        align-items: center;
        justify-content: center;
        top: 53px;
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
      #dib
      {
        display: inline-block;
        background-color: rgba(224, 224, 253, 0.8);
      }
      .card-body
      {
        background-color: rgba(224, 224, 253, 0.8);
      }
      .card-footer
      {
        background-color: rgba(224, 224, 253, 0.8);
      }
      #dib:hover
      {
        color:white;
        background-color:blue;
        #cb{color:white;};
        position:relative;
        top:-15px;
        transition:1s;
      }
      #cb
      {
        font-size: 50px;
        color: blue;
      }
      #cbl
      {
        color:blue;
        font-weight: bold;
      }
      #lis
      {
        color:blue;
      }
      #list
      {
        list-style-type: none;
      }
      #course
      {
        position:absolute;
        bottom:0;
        right:0;
        background-color:white;
        z-index: 1;
      }
      #bgcs1
      {
        position: relative;
        height:230px;
        
        background-repeat: no-repeat;
        background-size: 473px 230px;
      }
      #bgcs2
      {
        position: relative;
        height:230px;
        background-image:url('img/css.jpeg');
        background-repeat: no-repeat;
        background-size: 473px 230px;
      }
      #bgcs3
      {
        position: relative;
        height:230px;
        background-image:url('img/bs.jpeg');
        background-repeat: no-repeat;
        background-size: 283px 228px;
      }
      #bgcs4
      {
        position: relative;
        height:230px;
        background-image:url('img/js.jpeg');
        background-repeat: no-repeat;
        background-size: 283px 228px;
      }
      #bgcs5
      {
        position: relative;
        height:230px;
        background-image:url('img/php.jpeg');
        background-repeat: no-repeat;
        background-size: 283px 228px;
      } 
      #bgcs3:hover, #bgcs4:hover, #bgcs5:hover
      {
        background-size: 290px 230px;
        transition:.5s;
      }
      #bgcs1:hover
      {
        background-size: 480px 240px;
        transition:.5s;
      }
      #bgcs3a
      {
        position: relative;
        height:230px;
        
        background-repeat: no-repeat;
        background-size: 285px 230px;
      }
      #bgcs3b
      {
        position: relative;
        height:230px;
        background-image:url('img/course-3.jpg');
        background-repeat: no-repeat;
        background-size: 285px 230px;
      }
      #bgcs3c
      {
        position: relative;
        height:230px;
        background-image:url('img/course-2.jpg');
        background-repeat: no-repeat;
        background-size: 285px 230px;
      }
      #bgcs3a:hover, #bgcs3b:hover, #bgcs3c:hover, #bgcs3d:hover
      {
        background-size: 290px 235px;
        transition:1s;
      }
      #btng
      {
        position: relative;
        bottom:-170px;
      }
      #btnga
      {
        position: relative;
        bottom:-208px;
        background-color: rgba(224, 224, 253, 1);
        font-size: 30px;
      }
      #bgcs3d
      {
        position: relative;
        height:230px;
        background-image:url('img/team-2.jpg');
        background-repeat: no-repeat;
        background-size: 285px 230px;
      }
      .b
      {
        background-color: rgba(224, 224, 253, 0.8);
      }
      #about
      {
        background-image: url('img/2.jpeg');
        background-repeat: no-repeat;
        background-size: 100%;
        height:300px;
      }
      #hrefa
      {
        text-decoration: none;
        color:white;
      }
      .nav-link
      {
        color:black;
      }
      .active
      {
        color:blue;
      }
      .dropdown:hover .dropdown-menu
      {
        display:block;
      }
      .delete
      {
        position: absolute;
        z-index: 1;
        border: 1px solid black;
        border-radius: 3px;
        background-color: white;
        max-width: 25%;
        margin-left: 35%;
        top:300px;
        display: none;
      }
    </style>
  </head>
  <body>
  
  
  <nav class="navbar navbar-expand-md justify-content-center fixed-top bg-white">
  <div class="container-fluid">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class='fa fa-align-justify'></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a id="a" class="dropdown-item" href="ourteam.php">Our Team</a></li>
          <li><a id="a" class="dropdown-item" href="testimonial.php">Testimonial</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
      <span class="d-flex">
      <button onclick="login()" type="button" class="nav-link btn btn-white">Log in</button>
      <button onclick="signin()" type="button" class="nav-link btn btn-white">Register</button>
    </span>
    </div>
  </div>
</nav>