<?php
include 'code.php';
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
          </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
        <a href="index.php" class="navbar-brand">TOST GROUP SD</a>
        <ul class="float-end nav d-flex">
          <?php
          if(isset($_SESSION['message']))
          { ?>
           <?php echo htmlspecialchars($name);?> 
          <?php }
          ?>  
        </ul>
    </nav> 
  <div class="container-fluid bg-light">
    