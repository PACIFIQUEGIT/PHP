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
    <a id="hrefa" href="">Home</a> / <a id="hrefa" href="">Pages</a> / <a id="hrefa" href="contact.php">Contact</a></p>
</div>
</div>
</div>
<div class="container text-center my-5">
  <p id="cbl">CONTACT US</p>
  <h1>Contact For Any Query</h1>
  <div class="row mt-5 justify-content-around">
    <div class="col-3 text-start ps-0">      
        <div><b>Get In Touch</b></div>
        <div>The contact form is currently inactive. Get a 
           functional and working contact form with Ajax & 
           PHP in a few minutes. Just copy and paste the 
           files, add a little code and you're done. <a style="color:blue;" href="https://htmlcodex.com/contact-form/">Download 
           Now</a>.
        </div>
        <div class="row mt-2 px-3">
            <div class="col-2 bg-primary text-center text-white px-3 py-2">
                <i class='bx bxs-location-plus' ></i>
            </div>
            <div class="col py-0">
                <p style="color:blue;" class="my-0"><b>Office</b></p>
                <p class="my-0">RN3,RN15, Kigali.</p>
            </div>
        </div>
        <div class="row mt-2 px-3">
            <div class="col-2 bg-primary text-center text-white px-3 py-2">
            <i class='bx bxs-phone' ></i>
            </div>
            <div class="col py-0">
                <p style="color:blue;" class="my-0"><b>Mobile</b></p>
                <p class="my-0">+250 788 844 934</p>
            </div>
        </div>
        <div class="row mt-2 px-3">
            <div class="col-2 bg-primary text-center text-white px-3 py-2">
            <i class='bx bxs-envelope' ></i>
            </div>
            <div class="col py-0">
                <p style="color:blue;" class="my-0"><b>Email</b></p>
                <p class="my-0">info@tostgroup.com</p>
            </div>
        </div>
    </div>
    <div class="col-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.485113781446!2d30.113671474154316!3d-1.9595611980226828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7e9fc444fcf%3A0x15338cbedce73e9e!2sTOST%20Group!5e0!3m2!1sen!2srw!4v1707490791264!5m2!1sen!2srw" width="320" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-3">
        <form action="">
            <div class="d-flex">
                <div class="form-floating me-2">
                <input type="text" class="form-control" id="name" placeholder="Your Name">
                <label for="name">Your Name</label>
                </div>
                <div class="form-floating ms-2">
                <input type="text" class="form-control" id="email" placeholder="email">
                <label for="email">Your Email</label>
                </div>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="subject" placeholder="subject">
                <label for="subject">Subject</label>
            </div>
            <div  class="form-floating my-3">
            <textarea style="height:140px;" class="form-control" id="message" cols="10" placeholder="Message" rows="5"></textarea>
            <label for="message">Message</label>
            </div>
            <input style="width:100%;" type="submit" value="Send Message" class="btn btn-primary">
        </form>
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