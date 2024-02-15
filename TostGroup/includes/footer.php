
<footer class="bg-dark text-white">
<div class="mx-5 p-5 row justify-content-around">
<div  class="col-md-3">
<h4>Quick Link</h4>  
<a id="ftra" href=""><i class='bx bx-chevron-right'></i>About Us</a><br>
<a id="ftra" href=""><i class='bx bx-chevron-right'></i>Contact Us</a><br>
<a id="ftra" href=""><i class='bx bx-chevron-right'></i>Privacy Policy</a><br>
<a id="ftra" href=""><i class='bx bx-chevron-right'></i>Terms & Condition</a><br>
<a id="ftra" href=""><i class='bx bx-chevron-right'></i>FAQs & Help</a><br>
</div>
<div  class="col-md-3">
<h4>Contact</h4>
<i class='bx bxs-location-plus' ></i> Giporoso, REMERA <br>
<i class='bx bxs-phone-call'></i> +250 788 844 934 <br>
<i class='bx bxs-envelope' ></i> info@tostgroup.com <br>
<i class='bx bx-globe'></i> tostgroup.com <br>
<i class='bx bxl-twitter' ></i><i class='bx bxl-facebook-circle' ></i><i class='bx bxl-instagram-alt' ></i><i class='bx bxl-whatsapp' ></i><i class='bx bxl-linkedin' ></i><i class='bx bxl-youtube' ></i>
</div>
<div  class="col-md-3">
  <h4>Gallery</h4>
  <div class="row d-flex">
    <div class="col mx-1 py-1 text-center bg-primary"><img width="45px" height="35px" src="img/course-1.jpg" alt=""></div>
    <div class="col mx-1 py-1 text-center bg-primary"><img width="45px" height="35px" src="img/course-2.jpg" alt=""></div>
    <div class="col mx-1 py-1 text-center bg-primary"><img width="45px" height="35px" src="img/course-3.jpg" alt=""></div>
  </div>
  <div class="row d-flex mt-2">
    <div class="col mx-1 py-1 text-center bg-primary"><img width="45px" height="35px" src="img/course-2.jpg" alt=""></div>
    <div class="col mx-1 py-1 text-center bg-primary"><img width="45px" height="35px" src="img/course-3.jpg" alt=""></div>
    <div class="col mx-1 py-1 text-center bg-primary"><img width="45px" height="35px" src="img/course-1.jpg" alt=""></div>
  </div>
</div>
<div  class="col-md-3">
  <h4>Newsletter</h4>
  Dolor amet sit justo amet elitr <br>
  clita ipsum elitr est.
  <form action="">
    <div class="form-floating d-flex bg-white p-1">
    <input type="text" class="form-control border-0 text-secondary" id="email" name="email" placeholder="Your email">
    <label for="email" class="text-secondary">Your email</label>
    <button type="submit" class="btn btn-primary">SignUP</button>
    </div>
  </form>
</div>
</div>
<div class="container"><hr></div>
<div class="container">
  <div class="row">
    <div class="col-6">
      <p>© Tost Group Software Development Trainings, All Right Reserved. Designed By Pacifique</p>
      <p>Distributed By ...</p>
    </div>
    <div class="col-6">
  <div class="nav justify-content-end">
  <li class="nav-item">
  <a class="nav-link text-white border-end border-secondary" href="#">Home</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-white border-end border-secondary" href="#">Cookies</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-white border-end border-secondary" href="#">Help</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-white" href="#">FAQs</a>
  </li>
</div>
    </div>
  </div>
</div>
<button id="btn" onclick="topbtn()" class="btn btn-primary rounded-circle text-white"><i class='bx bx-up-arrow-alt'></i></button>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
    <script>
      function signin() 
      {
        document.getElementById("signin").style.display="block";
        document.getElementById("login").style.display="none";
        document.getElementById("res").value="";
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      function login() 
      {
        document.getElementById("login").style.display="block";
        document.getElementById("signin").style.display="none";
        document.getElementById("res").value="";
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      function closee()
      {
        document.getElementById("login").style.display="none";
        document.getElementById("signin").style.display="none";
      }
      
      const button = document.getElementById('btn');
      window.onscroll = function() {showbtn()};
      function showbtn() 
      {
        const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        if(scrollTop > 50)
            {button.style.display = 'block';} 
            else {button.style.display = 'none';}
      }
      function topbtn() 
      {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      document.addEventListener("DOMContentLoaded", function() 
      {
      var currentUrl = window.location.href;

      var links = document.querySelectorAll('.nav-link');

          links.forEach(function (link) 
          {
            if (link.href === currentUrl) 
            {
               link.classList.add('active');
            }
          }
          );
       }
       );
    </script>
  </body>
</html>