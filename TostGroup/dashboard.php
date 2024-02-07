<?php
session_start();
require 'config/db_con.php';
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
        .column
        {
            float: left;
        }
        #aside
        {
            background-color: blue;
            width: 20%;
        }
        #wider
        {
            width: 80%;
            margin-top:10px;
        }
        #btn
        {
            background-color: aliceblue;
            opacity: 0.3;
            width :30px;
            height :30px;
            margin-left:100px;
        }
        #tx
        {
            font-size: 10px;
            font-weight: bold;
        }
        #tx2
        {
            font-size: 20px;
            font-weight: bold;
        }
        #ic
        {
            font-size: 30px;
        }
        .co
        {
            float: left;
        }
        #tx1
        {
            font-size: 15px;
            font-weight: bold;
        }
        #dash
        {
            
            font-weight: bold;
            font-size: 15px;
        }
        #ic1
        {
            font-size: 379px;
        }
        #ic2
        {
            font-size: 300px;
            margin-bottom: 112px;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid ms-0 ps-0">
        <div id="aside" class="column mx-0">
            <div class="container p-4 pb-5 mb-4">
                <div class="row text-white border-top py-3 ">
                    <h6><i class='bx bxs-dashboard'></i> DASHBOARD</h6>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b>INTERFACE</b></p>
                    <p><i class='bx bxs-cog'></i> Components <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><i class='bx bxs-wrench' ></i> Utilities <span class="float-end"><i class='bx bx-chevron-right'></i></span></p>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b>ADDONS</b></p>
                    <p><i class='bx bxs-folder'></i> Pages <span class="float-end"><i class='bx bx-chevron-right'></i></span></p>
                    <p><i class='bx bx-line-chart'></i> Charts</p>
                    <p><i class='bx bx-table' ></i> Tables</p>
                </div>
                <div class="row text-white border-top py-3 pb-5 mb-5">
                <button id="btn" class="btn rounded-circle p-0"><i class='bx bx-chevron-left'></i></button>
                </div>
            </div>
        </div>
        <div id="wider" class="column bg-light">
            <div class="container">
                <div class="row">
                <p><span id="dash">DASHBOARD</span><span class="float-end"> <?php require 'message.php';?></span><span class="float-end"><a href="index.php">logout</a></span></p>
                </div>    
                <div class="row">
                    <div class="col ">
                        <div class="card d-flex  border-3 border-primary border-end-0 border-bottom-0 border-top-0">
                        <div class="co"><span id="tx" class="text-primary">EARNINGS(MONTHLY)</span> <br> <span id="tx2">$40,000</span></div>
                        <div class="co"><i id="ic" class='bx bxs-briefcase-alt-2'></i></div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card d-flex  border-3 border-success border-end-0 border-bottom-0 border-top-0">
                        <div class="co"><span id="tx" class="text-success">EARNINGS(ANNUAL)</span> <br> <span id="tx2">$215,000</span></div>
                        <div class="co"><i id="ic" class='bx bx-dollar' ></i></div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card  border-3 border-info border-end-0 border-bottom-0 border-top-0">
                        <div class="co"><span id="tx" class="text-info">TASKS</span> <br> <span id="tx2">50%</span></div>
                        <div class="co "><i id="ic" class='bx bxs-notepad'></i></div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card d-flex  border-3 border-warning border-end-0 border-bottom-0 border-top-0">
                        <div class="co"><span id="tx" class="text-warning">PENDING REQUESTS</span> <br> <span id="tx2">18</span></div>
                        <div class="co"><i id="ic" class='bx bxs-conversation'></i></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                        <p><span id="tx1" class="text-primary">Earnings Overview</span><span class="float-end"><i class='bx bx-dots-vertical-rounded' ></i></span></p>
                        </div>
                        <div class="card-body text-center">
                        <i id="ic1" class='bx bx-line-chart' ></i>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card">
                        <div class="card-header">
                        <p><span id="tx1" class="text-primary">Revenue Sources</span><span class="float-end"><i class='bx bx-dots-vertical-rounded' ></i></span></p>
                        </div>
                        <div class="card-body text-center p-0">
                        <i id="ic2" class='bx bxs-doughnut-chart'></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>