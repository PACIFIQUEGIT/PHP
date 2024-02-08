<?php
require 'code.php';
?>

<?php
include 'includes/header.php';
?>

  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">   
          <img id="im" src="img/1.jpeg" alt="Los Angeles" class="d-block" style="width:100%; height: 590px">
              <div class="card-img-overlay text-white">
                  <h1 class="card-title">Welcome to Software Development Trainings </h1>
                  <p class="card-text">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat <br>
                                       sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea <br> 
                                       voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus <br> 
                                       et tempore modi architecto.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>
    </div>
    <div class="carousel-item">
      <img id="im" src="img/2.jpeg" alt="Chicago" class="d-block" style="width:100%; height: 590px">
      <div class="card-img-overlay text-white">
                  <h1 class="card-title">Lorem Ipsum Dolor </h1>
                  <p class="card-text">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat <br>
                                       sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea <br> 
                                       voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus <br> 
                                       et tempore modi architecto.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>
    </div>
    <div class="carousel-item">
      <img id="im" src="img/3.jpeg" alt="New York" class="d-block" style="width:100%; height: 590px">
      <div class="card-img-overlay text-white">
                  <h1 class="card-title">Sequi ea ut et est quaerat </h1>
                  <p class="card-text">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat <br>
                                       sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea <br> 
                                       voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus <br> 
                                       et tempore modi architecto.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button id="b1" class="carousel-control-prev rounded-circle bg-primary " type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button id="b2" class="carousel-control-next rounded-circle bg-primary" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

  <div class="container-fluid bg-light ">
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
                <input type="text" name="name1" value="<?php echo htmlspecialchars($name);?>" class="form-control">
                <div class="text-danger"><?php echo $errors['name1'];?></div>
            </div>
            <div class="my-1">
                <label for="">Email:</label> <br>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>" class="form-control">
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
        <p>Already registered? <button type="button" onclick="login()" class="nav-link btn btn-primary d-inline text-white">Login</button></p>
        </div>
    </div>
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
        <p>Not yet registered? <button type="button" onclick="signin()" class="nav-link btn btn-primary d-inline text-white">Register</button></p>
    </div>
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
