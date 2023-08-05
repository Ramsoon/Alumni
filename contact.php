<!DOCTYPE html>
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


  <!-- the select buttons -->
<script>
  function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "Applied Sciences"){
            var optionArray = ["Biochemistry|Biochemistry","Chemistry|Chemistry", "Computer Science|Computer Science", "Microbiology|Microbiology","Science and Laboratory Science|Science and Laboratory", "Mathematics and Statisitcs|Mathematics and Statistics"];
        }else if(s1.value == "Environmental Sciences"){
            var optionArray = ["Architecture|Architecture","Building Technology|Building Technology",  "Quantity Surveying|Quantity Surveying"];
        }else if(s1.value == "Engineering"){
            var optionArray = ["Chemical Engineering|Chemical Engineering", "Civil Engineering|Civil Engineering", "Computer Engineering|Computer Engineering", "Electrical & Electronic|Electrical & Electronic"];
        }else if(s1.value == "Art & Design"){
            var optionArray = ["Art and Design|Art and Design", "Graphics|Graphics", "Texttile|Texttile"];
        }else if(s1.value == "Management Sciences"){
            var optionArray = ["Accounting|Accounting", "Business Administration|Business Administration", "Library and Information Sciences|Library and Information Sciences", "Mass Communication|Mass Communication", "Public Administration|Public Administration"];
        }else if(s1.value == "Agricultural Sciences"){
            var optionArray = ["Agricultural Science|Agricultural Science", "Animal Husbandary|Animal Husbandary", "Fishery|Fishery"];
        }
        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
    </script>
</head>

<body class="sub_page">
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
              <a href="index.php">
                Login
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
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sign Up with Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form action="per.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name " name="names">
                </div>
                <div class="form-group col-md-4">
                  <select name="gender" class="form-control" id="inputSubject4">
                    <option value="Male">
                      Male

                    </option>
                    <option value="Female">
                      Female

                    </option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Phone" name="phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id" name="email">
                </div>
              
              <div class="form-group col-md-4">
              <select name="" class="form-control" id="slct1" name="school" onchange ="populate(this.id,'slct2')">
              <option value="">
                School
            </option>
            <option value="Agricultural Sciences">
                Agricultural Sciences
            </option>
            <option value="Applied Sciences">
            Applied Sciences
            </option>
            <option value="Art & Design">
            Art & Design
            </option>
            <option value="Engineering">
                Engineering
            </option>
            <option value="Environmental Sciences">
            Environmental Sciences
            </option>
             <option value="Management Sciences">
                Management Sciences
            </option>
              </select>
                </div>
                <div class="form-group col-md-4">
                  <select name="dept" class="form-control" id="slct2">
                    <option value="">
                      Department

                    </option>
                    
                  </select>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputName4" placeholder="CGPA " name="cgpa">
                </div>
                <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputSubject4" placeholder="Year of Graduation" name="graduation">
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Current Place of work" name="work">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputName4" placeholder="Position " name="position">
                </div>
                <div class="form-group col-md-4">
                <input type="password" class="form-control" id="inputSubject4" placeholder="Password" name="passwords">
                </div>
                <div class="form-group col-md-4">
                  <input type="password" class="form-control" id="inputSubject4" placeholder="Repeat password" name="repasswords">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Address" name="address">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a href="">
          <div class="img-box">
            <img src="images/location.png" alt="">
          </div>
          <h6>
            Loram Ipusum ari
            lo elisant na
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="images/call.png" alt="">
          </div>
          <h6>
            (+12 1234456789)
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="images/mail.png" alt="">
          </div>
          <h6>
            demo@gmail.com
          </h6>
        </a>

      </div>
      <div class="social_container">
        <div class="social-box">
          <div>
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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