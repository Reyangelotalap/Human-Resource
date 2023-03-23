<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Image//MyLogo-modified.png" type="image/x-icon">
  <link rel="shortcut icon" href="../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Job Portal | RGBC</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- bootstrap file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



  <!-- Css file -->

  <link rel="stylesheet" href="../Job Portal/index.css">


</head>

<body>

  <?php
  
  include '../Job Portal/Pages//loading.php'
  
  ?>

  <!-- My Logo -->
  <section id="content">
    <header>
      <a href="" class="logo" style="text-decoration: none !important;"><img
          src="../Job Portal/Image/MyLogo-modified.png"> <span>Job Portal</span></a>

      <ul class="navbar">
        <li><a href="../Job Portal/index.php #content" style="text-decoration: none !important;">Home</a></li>

        <li><a href="../Job Portal/index.php #section-about" style="text-decoration: none !important;">About</a></li>

        <li><a href="../Job Portal/index.php  #section-contact" style="text-decoration: none !important;">Contact</a>
        </li>

      </ul>

      <div class="main">
        <a href="../Job Portal/Pages/loginApplicant">
          <button class="signin" id="signin">Sign
            in</button>
        </a>
        <button class="hehe" id="button"
          onClick="location.href='../Job Portal/Pages/regApplicant'">Register</button>
        <div class="bx bx-menu" id="menu-icon"></div>

      </div>

    </header>



    <div class="content">
      <div class="textBox">
        <h2>Opportunities don't happen, You <span>Create</span> them. </h2>
        <p style="text-align: justify;">Are you looking for an exciting new career opportunity?
          Our company is currently seeking motivated individuals to
          join our team! We are a fast-growing company that values
          hard work, innovation, and a passion for excellence.
        </p>
        <button class="button" onClick="location.href='../Job Portal/Pages/JobVacancies'"> Find Job</button>
        <!-- <a href="../Pages/JobVacancies.php" class="button">Find Job</a> -->
        <div class="icon">
          <a href="" style="text-decoration: none"><i class="ri-facebook-circle-fill"></i></a>
          <a href="" style="text-decoration: none"><i class="ri-instagram-fill"></i></a>
          <a href="" style="text-decoration: none"><i class="ri-twitter-fill"></i></a>
        </div>

      </div>
      <div class="imgBox">
        <img src="../Job Portal/Image/boss.svg" class="boss">
      </div>
    </div>
  </section>


  <!-- About -->

  <section id="section-about">
    <div class="about">
      <div class="imgBox">
        <img src="../Job Portal/Image/About us page-amico.svg" class="boss">
      </div>
      <div class="textBox">
        <h2> <span>About Us</span> </h2>
        <p style=" text-align: justify;">
          We’re a loan money company that is small but mighty. We are an independent and nimble organization that is
          passionate about what we do. Our mission is to provide accessible and affordable financial services to
          underserved communities, and to empower individuals to achieve their financial goals. </p>

        <p style=" text-align: justify;">To accomplish this mission, we are currently looking for a highly motivated
          individual to join our team. You will be responsible for assessing loan applications, analyzing financial
          information, and making loan decisions. The ideal candidate will have a strong background in finance,
          excellent communication skills, and a commitment to exceptional customer service.
        </p>

      </div>
    </div>
  </section>


  <!-- Contact -->

  <section id="section-contact">
    <div class="contact">
      <div class="textBox">
        <h2> <span>Contact Us</span> </h2>
        <p style=" text-align: justify;">If you have any questions and concern just find us and fill-up
          the form and we will answer it shortly. If you are living nearby
          just come visit our company RGBC Lending Investor Company.</p>
        <br>
        <p style=" text-align: justify;"> If you are live far away contact
          us and we’ll get back as soon as possible. Thank you for considering RGBC Lending Investor Company. We look
          forward to hearing from you!</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>


      <div class="contactForm">
        <form id="contact_form" action="Mail.php" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
              placeholder="Enter your name">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <i class="fas fa-envelope"></i>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <small id="emailHelp" class="form-text" style="color: #fff; font-size : 15px">We'll never share your email
            with anyone else.</small>
          <br>
          <div class="form-group">
            <label for="message" style="font-size: 15px;">Message</label>
            <i class="fas fa-paper-plane" id="plane"></i>
            <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea>
          </div>

          <div class="send">
            <button type="submit" id="send">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- For register -->

  <!-- <div class="bg-modal" id="mymodal">
    <div class="modal-content">
      <div class="close"><i class="fas fa-times"></i></div>
      <p>Select you want to register.</p>
      <br>
      <button class="applicant"><a href="../Job Portal/Pages/regApplicant.php"
          style="color: white;">Jobseeker</a></button>
      <button class="employee"><a href="../Job Portal/Pages/regEmployee.php"
          style="color: #0d6efd;">Employer</a></button>
    </div>
  </div> -->

  <!-- for login -->
  <!-- 
  <div class="bg-modalLogin" id="mymodal">
    <div class="modal-content">
      <div class="closeLogin"><i class="fas fa-times"></i></div>
      <p>Select you want to sign in.</p>
      <br>
      <button class="applicant"><a href="../Job Portal/Pages/loginApplicant.php"
          style="color: white; text-decoration: none;">Jobseeker</a></button>
      <button class="employee"><a href="../Job Portal/Pages/loginEmployee.php"
          style="color: #0d6efd;  text-decoration: none;">Employer</a></button>
    </div>
  </div> -->



  <!-- footer -->

  <footer class="footer-distributed">
    <div class="footer-left">
      <h3>RGBC <span>Developer</span></h3>

      <p class="footer-links">
        <a href="#content">Home</a>
        <span style="margin-left: 1rem;">|</span>
        <a href="#section-about" style=" margin-left: 1rem;">About</a>
        <span style="margin-left: 1rem;">|</span>
        <a href="#section-contact" style=" margin-left: 1rem;">Contact</a>

      </p>

      <p class="footer-company-name">Copyright 2023 RGBCmicrofinance all right reserved.</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span> Quirino Highway kaligayahan Quezon City </span></p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p> 09228218607</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="">RGBCmicrofinance@gmail.com</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
      <p style="color: white; font-size: 19px; display:block; text-align: justify;"> <strong
          style="color: #F6C53F; letter-spacing: 2px;">RGBCmicrofinance</strong>
         We’re loan money company we are small company that
        can drive, Independent company that can nimble and
        passionate about our organization.</p>

      <div class="footer-icons">
        <a href=""><i class="ri-facebook-circle-fill"></i></a>
        <a href=""><i class="ri-instagram-fill"></i></a>
        <a href=""><i class="ri-twitter-fill"></i></a>
      </div>
    </div>
  </footer>

  <script>
  $(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function() {

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  </script>


  <!-- Script file -->
  <script type="text/javascript" src="../Job Portal/JavaScript/bg-modalLogin.js"></script>
  <script type="text/javascript" src="../Job Portal/JavaScript/bgmodal.js"></script>
  <script type="text/javascript" src="../Job Portal/JavaScript/OpenMenu.js"></script>

</body>

</html>