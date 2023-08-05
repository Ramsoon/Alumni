<!DOCTYPE html>
<?php

include("db.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['emails']);
   $mypassword = mysqli_real_escape_string($db,$_POST['passwords']); 
   
   $sql = "SELECT id FROM admin_login WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 //  $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
 
   if($count == 1) {
      //session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      echo "<script>alert('Login Successful')</script>";
      header("location: blog.php");
   }else {
      echo "<script>alert('Access Denied, invalid login credentials')</script>
      ";
   }
}
?>



<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Alumni</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <script>
    function login() {
  var subbutton = document.getElementById("submit");
  var email = document.getElementById("user");
  var passwords = document.getElementById("pass");
  if(subbutton.click){
    if(email == "admin@gmail.com" && passwords == "admin"){
      location.replace("blog.html");
    }
    else{
      alert("wrong login Credentials \n Try again");
      location.replace("blog.html");
    }
  }
}
  </script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/logok.jpg" alt="" width="70px" height="70px"> KogiPoly Alumni System
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              <a href="contact.php">
                Sign up
              </a>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="students.php">Top Students</a>
               
                <a href="contact.php">Sign Up</a>
                <a href="index.php">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_container">
        <div class="img-box">
          <img src="images/polygate.jpg" alt="">
        </div>
        <div class="detail_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h1 style="font-size: xx-large;">
                    Creativity <br>
                    Self-Reliance <br>
                    Services
                  </h1>
                  <a href="https://portal.kogistatepolytechnic.edu.ng/pd_dip/applied">
                    Apply Now
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1 style="font-size: xx-large;">
                    Become <br>
                    Our Student <br>
                    Today
                  </h1>
                  <a href="https://portal.kogistatepolytechnic.edu.ng/pd_dip/applied">
                    Apply Here
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1 style="font-size: xx-large;">
                    We top <br>
                    In the  <br>
                    Industry
                  </h1>
                  <a href="https://portal.kogistatepolytechnic.edu.ng/pd_dip/applied">
                    Study with Us
                  </a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <!-- book section -->
  <section class="book_section">
    <div class="form_container">
      <form action="" method="post">
        <div class="form-row">
          <div class="col-lg-8">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Email</label>
                <input type="email" class="form-control" placeholder="Email" name = "emails" id="email">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Password</label>
                <input type="password" class="form-control" name="passwords" id="pass" placeholder=" ">
              </div>
            </div>
            <!-- <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Pick Up Date</label>
                <input type="text" class="form-control" placeholder="07/09/2020">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Return Date</label>
                <input type="text" class="form-control" placeholder="07/09/2020">
              </div>
            </div> -->
          </div>
          <div class="col-lg-4">
            <div class="btn-container">
              <button type="submit" class="" id="submit">
                Login
              </button>
            </div>
          </div>
        </div>

      </form>
    </div>
    <!-- <div class="img-box">
      <img src="images/logok.jpg" alt="">
    </div> -->
  </section>

  <!-- end book section -->

  
  <!-- map section -->

  <section class="map_section">
    <!-- map section --> 
    <div class="map_container">
      <div class="map-responsive">
        <iframe src="https://www.google.com.ng/maps/search/kogi+state+polytechnic+lokoja/@7.8226842,6.7172303,14z/data=!3m1!4b1?hl=en&entry=ttu" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
      </div>
    </div>
    <!-- end map section -->
  </section>


  <!-- end map section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
  <p>
      Copyright &copy; 2023 All Rights Reserved. Design by
      Nathan, Prosper & Kerimetu
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>


</body>

</html>