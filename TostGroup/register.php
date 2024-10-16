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
        background-image:url('img/html.jpeg');
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
      #bgcs1:hover, #bgcs2:hover
      {
        background-size: 480px 240px;
        transition:.5s;
      }
      #bgcs3a
      {
        position: relative;
        height:230px;
        background-image:url('img/course-2.jpg');
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
    <div class="container-fluid ms-0 ps-0">
        <div id="aside" class="column mx-0">
            <div class="container p-4 pb-5 mb-4">
                <div class="row text-white border-top py-3 ">
                    <h6><i class='bx bxs-dashboard'></i> DASHBOARD</h6>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b>INTERFACE</b></p>
                    <p><a style="color:white" href="register.php">Register Now</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="registeredstudents.php">Registered students</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span></p>
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
                <p><span id="dash">Welcome, <?php require 'message.php';?></span><span class="float-end d-inline"> </span><span class="float-end"><a href="index.php">logout</a></span></p>
                </div>    
                <hr>
                <?php
if(isset($_SESSION['message'])){
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
unset($_SESSION['message']); 
};  
?>
                

                <div class="row justify-content-center">
                <div class="col-4">
                <form action="register.php" method="POST">
            <div class="my-1">
                <label for="">Names:</label> <br>
                <input type="text" id="res" name="namer" value="<?php echo htmlspecialchars($name);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['namer'];?></div>
            </div>
            <div class="justify-content-center my-1">
            <label class="form-label" for="courses">Course:</label> <br>
            <select class="form-select" name="course" id="courses">
                <option value="">Select a course</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="BOOTSTRAP">BOOTSTRAP</option>
                <option value="JAVASCRIPT">JAVASCRIPT</option>
                <option value="PHP">PHP</option>
            </select>
            <div class="text-danger"><?php echo $errors['course'];?></div>
            </div>
            <div class="my-1">
                <label for="">Email:</label> <br>
                <input type="text" id="res" name="emailr" value="<?php echo htmlspecialchars($email);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['emailr'];?></div>
            </div>
            <div class="my-1">
                <label for="">Province:</label> <br>
                <input type="text" name="provincer" value="<?php echo htmlspecialchars($province);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['provincer'];?></div>
            </div>
            <div class="my-1"staut>
                <label for="">District:</label> <br>
                <input type="text" name="districtr" value="<?php echo htmlspecialchars($district);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['districtr'];?></div>
            </div>
            <div class="my-1">
                <label for="">Sector:</label> <br>
                <input type="text" name="sectorr" value="<?php echo htmlspecialchars($sector);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['sectorr'];?></div>
            </div>
            <div class="my-1">
            <label class="form-label" for="">Gender:</label> <br>
            <input class="form-check-input" type="radio" id="male" name="genderr" value="male">
            <label class="form-check-label" for="male">Male</label>
            <input class="form-check-input" type="radio" id="female" name="genderr" value="female">
            <label class="form-check-label" for="female">Female</label>
            <div class="text-danger"><?php echo $errors['genderr'];?></div>
            </div>   
            <input type="hidden" value="Pending" name="status">
            <input type="submit" value="Register" name="signinr" class="btn btn-primary my-1">
        </form>
                </div>
                </div>
                <div class="row mt-4">
                    
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