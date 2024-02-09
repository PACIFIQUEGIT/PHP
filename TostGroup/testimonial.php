<?php
require 'code.php';
?>

<?php
include 'includes/header.php';
?>

<div id="about" class="container-fluid">
<div class="row justify-content-center mt-5 pt-5">
<div class="col-3 mt-5  text-center text-white">
    <p><span style="font-size:50px;"><b>About Us</b></span> <br>
    <a id="hrefa" href="">Home</a> / <a id="hrefa" href="">Pages</a> / <a id="hrefa" href="testmonial.php">Testimonial</a></p>
</div>
</div>
</div>
<div class="container text-center my-5">
    <p id="cbl">TESTIMONIAL</p>
  <h1>Our Students Say!</h1>
  <div class="row mt-5 justify-content-between">
        <div class="col-3">
           <div class="justify-content-center row">
             <div style="width: 150px; height: 150px;;" class="border rounded-circle justify-content-around row p-1">
             <img style="width: 140px; height: 140px;;" class="card-img-top  rounded-circle" src="img/11.jpg" alt="image">
             </div>
             <div id="">
             <p><b>Client Name</b> <br>
                   Profession</p>
             </div>
             <div class="b">
             <p>Tempor erat elitr rebum at clita. Diam dolor 
                diam ipsum sit diam amet diam et eos. 
                Clita erat ipsum et lorem et sit.</p>
             </div>
            </div>
        </div>
        <div class="col-3">
           <div class="justify-content-center row">
             <div style="width: 150px; height: 150px;;" class="border rounded-circle justify-content-around row p-1">
             <img style="width: 140px; height: 140px;;" class="card-img-top  rounded-circle" src="img/11.jpg" alt="image">
             </div>
             <div id="">
             <p><b>Client Name</b> <br>
                   Profession</p>
             </div>
             <div class="b">
             <p>Tempor erat elitr rebum at clita. Diam dolor 
                diam ipsum sit diam amet diam et eos. 
                Clita erat ipsum et lorem et sit.</p>
             </div>
            </div>
        </div>
        <div class="col-3">
           <div class="justify-content-center row">
             <div style="width: 150px; height: 150px;;" class="border rounded-circle justify-content-around row p-1">
             <img style="width: 140px; height: 140px;;" class="card-img-top  rounded-circle" src="img/11.jpg" alt="image">
             </div>
             <div id="">
             <p><b>Client Name</b> <br>
                   Profession</p>
             </div>
             <div class="b">
             <p>Tempor erat elitr rebum at clita. Diam dolor 
                diam ipsum sit diam amet diam et eos. 
                Clita erat ipsum et lorem et sit.</p>
             </div>
            </div>
        </div>
  </div>  
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


<?php
include 'includes/footer.php';
?>