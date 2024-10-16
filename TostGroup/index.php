<?php
include 'includes/header.php';
?>

<div id="demo" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
  <?php 
       $sql = "SELECT * FROM images";
       $query = mysqli_query($con, $sql);
       $one = true;
       while($row = mysqli_fetch_array($query))
       {
        $active_class = $one ? 'active' : ''; 
  ?>
    <div class="carousel-item <?php echo $active_class; ?>">
      <img id="im" src="img/<?php echo $row['file']; ?>" alt="New York" class="d-block" style="width:100%; height: 590px">
        <div class="card-img-overlay text-white">
                  <h1 class="card-title"><?php echo $row['header']; ?></h1>
                  <p class="card-text"><?php echo $row['paragraph']; ?></p>
                  <a href="#" class="btn btn-primary">Read More</a>
        </div>  
    </div> 
  <?php 
       $one = false;
       };
  ?>
  </div>

    <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <button id="b1" class="carousel-control-prev rounded-circle bg-primary " type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </button>
    <button id="b2" class="carousel-control-next rounded-circle bg-primary" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    </button>
</div>

  <div class="container-fluid my-5 pt-3">
  <div class="justify-content-around row mt-5">
  <?php 
                        $sql = "SELECT * FROM services";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?> 
    <div id="dib" class="text-center col-md-3 py-4">
      <p id="cb"><i class="fa fa-mortar-board"></i></p>
      <h5><?php echo $row['title']; ?></h5>
      <p><?php echo $row['description'];?></p>
    </div>
    <?php  } ; ?>
  </div>
  </div>
  <div class="container my-5 justify-content-around">
  <?php 
                        $sql = "SELECT * FROM aboutus";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?> 
    <div class="row my-5 py-5">
      <div class="col-md-6">
        <img src="img/<?php echo $row['file'];?>" width="550px" height="450px" alt="">
      </div>
      <div class="col-md-6">
        <p id="cbl">ABOUT US</p>
        <h1><?php echo $row['title'];?></h1>
        <p><?php echo $row['description'];?></p>
        <div class="row my-3">
          <div class="col ps-0">
            <ul id="list" class="ms-0 ps-2">
              <li><i id="lis" class='bx bx-right-arrow-alt'></i> Skilled Instructors</li>
              <li><i id="lis" class='bx bx-right-arrow-alt'></i> International Certificate</li>
              <li><i id="lis" class='bx bx-right-arrow-alt'></i> Online Classes</li>
            </ul>
          </div>
          <div class="col">
            <ul id="list">
              <li><i id="lis" class='bx bx-right-arrow-alt'></i> Online Classes</li>
              <li><i id="lis" class='bx bx-right-arrow-alt'></i> Skilled Instructors</li>
              <li><i id="lis" class='bx bx-right-arrow-alt'></i> International Certificate</li>
            </ul>
          </div>
        </div>
        <a href="#" class="btn btn-primary mt-2">Read More</a>
      </div>
    </div>
    <?php  } ; ?>
  </div>
  <div class="container text-center my-5">
  <p id="cbl">CATEGORIES</p>
  <h1>Courses Categories</h1>
  <div class="row mt-5 justify-content-around">
  <?php 
                        $sql = "SELECT * FROM courses1";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?> 
    <div style="background-image:url('img/<?php echo $row['file'];?>');" id="bgcs1" class="col-md-4">
      <div id="course"><b><?php echo $row['title'];?></b></div>
    </div>
    <?php  } ; ?>
  </div>
  
  </div>
  <div class="container text-center my-5">
  <p id="cbl">COURSES</p>
  <h1>Popular Courses</h1>
  <div class="row mt-5 justify-content-around">
  <?php 
                        $sql = "SELECT * FROM blog";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?>
    <div class="col-md-3">
    <div class="card">
      <div class="card-header p-0">
      <div style="background-image:url('img/<?php echo $row['file']; ?>');" id="bgcs3a">
        <div id="btng" class="btn-group">
          <a href="" class="btn btn-primary">Read More</a>
          <a href="" class="btn btn-primary">Join Now</a>
        </div>
      </div>
      </div>
      <div class="card-body">
      <p><b>Rwf</b> <br>
      <span style="font-size: 10px;" class="text-danger">
            <span style="color:blue;font-size: 20px;" class="fa fa-star"></span>
            <span style="color:blue;font-size: 20px;" class="fa fa-star"></span>
            <span style="color:blue;font-size: 20px;" class="fa fa-star"></span>
            <span style="color:blue;font-size: 20px;" class="fa fa-star"></span>
            <span style="color:blue;font-size: 20px;" class="fa fa-star"></span>
            <span style="color:black;font-size: 20px;">(123)</span>
        </span>
      </p>
        <p><b><?php echo $row['title']; ?></b></p>
      </div>
      <div class="card-footer d-flex p-0">
        <div id="fts" class="col-4 border border-muted"><i class='bx bxs-user text-primary'></i>John Doe</div>
        <div id="fts" class="col-4 border border-muted"><i class='bx bxs-time-five text-primary' ></i>Hrs</div>
        <div id="fts" class="col-4 border border-muted"><i class='bx bxs-user text-primary'></i>30 Students</div>
      </div>
    </div>
    </div> <?php  } ; ?>
  </div>
  </div>
  <div class="container text-center my-5">
  <p id="cbl">INSTRUCTORS</p>
  <h1>Expert Instructors</h1>
  <div class="row mt-5 justify-content-around">
  <?php 
                        $sql = "SELECT * FROM instructors";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?>
    <div class="col-md-3">
       <div class="card">
         <div class="card-header p-0">
           <div style=" background-image:url('img/<?php echo $row['file']; ?>');" id="bgcs3d">
             <div id="btnga" class="btn-group px-1">
             <a href="" ><i class='bx bxl-facebook-square' ></i></a>
             <a href="" ><i class='bx bxl-twitter' ></i></a>
             <a href="" ><i class='bx bxl-instagram-alt' ></i></a>
             </div>
           </div>
         </div>
         <div class="card-body">
         <p><b><?php echo $row['title']; ?></b> <br>
         <?php echo $row['description']; ?></p>
         </div>
       </div>
    </div>
    <?php  } ; ?>
  </div>  
</div>
  <div class="container text-center my-5">
    <p id="cbl">TESTIMONIAL</p>
  <h1>Our Students Say!</h1>
  <div class="row mt-5 justify-content-between">
  <?php 
                        $sql = "SELECT * FROM students_t";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?>
        <div class="col-md-3">
           <div class="justify-content-center row">
             <div style="width: 150px; height: 150px;;" class="border rounded-circle justify-content-around row p-1">
             <img style="width: 140px; height: 140px;;" class="card-img-top  rounded-circle" src="img/<?php echo $row['file']; ?>" alt="image">
             </div>
             <div id="">
             <p><b><?php echo $row['title']; ?></b> <br>
             <?php echo $row['description']; ?></p>
             </div>
             <div class="b">
             <p><?php echo $row['testimony']; ?></p>
             </div>
            </div>
        </div>
        <?php  } ; ?>
  </div>  
</div>
<div class="container-fluid bg-light justify-content-center ">
    <div class="container-fluid justify-content-center">
      <div class="row justify-content-center">
      <div class="col-md-3">
      <div class="card signin" id="signin">
        <div class="card-header"><p id="p1"><b>Register Now</b><button type="button" onclick="closee()" class="float-end">Close</button></p></div>
        <div class="card-body">
        <?php
        if(isset($_SESSION['failure'])){
        ?>
        <?php echo $_SESSION['failure']; ?>
        <?php
        };  
        ?>
        <form action="index.php" method="POST">
            <div class="my-1">
                <label for="">Username:</label> <br>
                <input type="text" id="res" name="name1" value="<?php echo htmlspecialchars($name);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['name1'];?></div>
            </div>
            <div class="my-1">
                <label for="">Email:</label> <br>
                <input type="text" id="res" name="email" value="<?php echo htmlspecialchars($email);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['email'];?></div>
            </div>
            <div class="my-1">
                <label for="">Password:</label> <br>
                <input type="password" name="password" class="form-control">
                <div class="text-danger"><?php echo $errors['password'];?></div>
            </div>
            <div class="my-1">
            <label class="form-label" for="">Gender:</label> <br>
            <input class="form-check-input" type="radio" id="male" name="gender" value="male">
            <label class="form-check-label" for="male">Male</label>
            <input class="form-check-input" type="radio" id="female" name="gender" value="female">
            <label class="form-check-label" for="female">Female</label>
            <div class="text-danger"><?php echo $errors['gender'];?></div>
            </div>       
            <input type="submit" value="Register" name="signin" class="btn btn-primary my-1">
        </form>
        <p>Already registered? <button onclick="login()" class="nav-link d-inline text-primary border-0">Login</button></p>
        </div>
    </div>
      </div>
    </div></div>
    <div class="container-fluid justify-content-center">
    <div class="row justify-content-center">
      <div class="col-md-3">
      <div class="card login" id="login">
    <div class="card-header"><p id="p1"><b>Log in</b><button type="button" onclick="closee()" class="float-end">Close</button></p></div>
    <div class="card-body">
    <form action="index.php" method="POST">
            <div class="my-2">
                <label for="">Username:</label> <br>
                <input type="text" name="name2" class="form-control">
                <div class="text-danger"><?php echo $errors['name2'];?></div>
            </div>
            <div class="my-2">
                <label for="">Password:</label> <br>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" value="Log in" name="login" class="btn btn-primary my-3">
        </form>
        <p>Not yet registered? <button onclick="signin()" class="nav-link d-inline text-primary border-0">Register</button></p>
    </div>
    </div>
      </div>
    </div>
    </div>
  </div>
<?php include 'includes/footer.php'; ?>
