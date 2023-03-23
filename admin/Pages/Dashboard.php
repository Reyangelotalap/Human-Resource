<?php

include('Connection.php');

session_start();


if(isset($_SESSION['Username'], $_SESSION['Password'])){






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="3540; url=LoginForm.php">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">




  <!--css file-->
  <link rel="stylesheet" href="../Css/Recruitment.css">

  <!--modal file-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!--css file-->
  <link rel="stylesheet" href="../Css/Dashboard.css">


</head>

<body>


  <?php 
if(isset($_SESSION['message'])){ ?>
  <script>
  swal({
    title: "Succesfully Login",
    text: "<?php echo $_SESSION['message'];?>",
    icon: "success",
    button: "OK"
  })
  </script>
  <?php unset($_SESSION['message']); }?>



<section id="menu">
  <div class="logo">
    <i class='fas fa-circle'></i>
    <h2>RGBC</h2>
  </div>

  <div class="items">

    <li>
      <a href="../pages/Recruitment.php">
        <i class="la la-search"></i>
        <span class="link">Recruitment</span>
      </a>

    </li>
    <li>
      <a href="../pages/Applicant.php">
        <i class="las la-user-friends"></i>
        <span class="link">Applicant</span>
      </a>

    </li>
    <li>
      <a href="../pages/Learning.php">
        <i class="las la-file-invoice"></i>
        <span class="link">Learning</span>
      </a>

    </li>
    <li>
      <a href="../pages/Training.php">
        <i class="las la-user-edit"></i>
        <span class="link">Training</span>
      </a>

    </li>
    <li>
      <a href="../pages/New Hired.php">
        <i class="las la-briefcase"></i>
        <span class="link">New Hired</span>
      </a>
    </li>
    <li>
      <a href="../pages/ESS portal.php">
        <i class="las la-address-card"></i>
        <span class="link">Ess Portal</span>
      </a>
    </li>
    <li>
      <a href="../pages/Performance.php">
        <i class="las la-theater-masks"></i>
        <span class="link">Performance</span>
      </a>
    </li>
    <li>
      <a href="../pages/Recognition.php">
        <i class="las la-award"></i>
        <span class="link">Recognition</span>
      </a>
    </li>
    <li>
      <a href="../pages/Succession.php">
        <i class="las la-chalkboard-teacher"></i>
        <span class="link">Succession</span>
      </a>
    </li>
    <li>
      <a href="../pages/Competency.php">
        <i class="las la-highlighter"></i>
        <span class="link">Competency</span>
      </a>
    </li>
    </ul>
  </div>
  </div>
</section>


<section id="interface">
  <div class="navigation">
    <div class="n1">

      <div>
        <i id="menu-btn" class="fas fa-bars"></i>
      </div>

      <div class="search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search here..">
      </div>

    </div>

    <div class="profile">
      <i class="fas fa-envelope"></i>
      <i class="far fa-bell"></i>
      <div class="bell-notification" current-count="8">
      </div>
      <img src="../Image/3135715.png" alt="" onclick="toggleUser()">
    </div>

    <div class="user_menu_wrap" id="userMenu">
      <div class="user_menu">

        <div class="user_info">
          <img src="../Image/3135715.png">
          <div>
            <h3 style="font-size: 14px">Admin</h3>
            <small>RGBC</small>
          </div>
        </div>
        <hr>

        <a href="" class="menu_link">
          <i class="las la-user-cog"></i>
          <p style="font-size: 14px;">Edit Profile</p>
        </a>

        <a href="../Pages/LoginForm.php" class="menu_link">
          <i class="las la-sign-out-alt"></i>
          <p style="font-size: 14px;">Logout</p>
        </a>

      </div>
    </div>

  </div>

  <!-- <h3 class="i-name">
  </h3> -->

  <!--main-->

  <section>

    <div id="grid">
      <div id="areaA">
        <!-- <a href="#">
          <button type="button" class="btn1">Job Configuration</button>
        </a>
      </div>
      <div id="areaB">
        <a href="">
          <button type="button" class="btn2">Applicant</button>
        </a>
      </div>
      <div id="areaC">
        <a href="">
          <button type="button" class="btn3">Email Configuration</button>
        </a>
      </div>
      <div id="areaD">
        <a href="">
          <button type="button" class="btn4">Posted Job</button>
        </a>
      </div> -->
      </div>

  </section>


  <!-- Email Configuration -->
  <!-- <div class="container">
    <div class="box">
      <h2 class="config">Email Configuration</h2>
      <i class="fas fa-caret-square-down" onclick="show_hide()" id="hide"></i>
      <form id="contact_form" action="Mail.php" method="POST">
        <div class="image">
          <img src="../Image/message-received.png" alt="">
        </div>
        <div class="email">
          <label for="email">Email</label>
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="email@gmail.com" id="email" name="Email" required>
        </div>
        <div class="subject">
          <label for="subject">Subject</label>
          <i class="fas fa-pen"></i>
          <input type="text" placeholder="subject" id="subject" name="subject" required>
        </div>
        <div class="message-box">
          <label for="message">Message</label>
          <i class="fas fa-paper-plane"></i>
          <textarea id="msg" cols="10" rows="1" placeholder="Message" name="Message" required></textarea>
        </div>
        <div class="send">
          <button type="submit" id="send">Send</button>
      </form>
    </div>
  </div>
  </div> -->


  <div class="container contact-form2">
    <h1 style="font-size: 20px;">Email Configuration
    <i class="far fa-caret-square-down" onclick="show_hide()" id="hide" style="margin-left: 49rem;" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i>
  </h1>
    <hr>

    
      </div>


  <div class="container contact-form">
    <h1 style="font-size: 20px;">Email Configuration
    <i class="far fa-caret-square-down" onclick="show_hide()" id="hide" style="margin-left: 49rem;" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i>
  </h1>
    <hr>

    <form id="contact_form" action="Mail.php" method="POST">

    <div class="row">
      <div class="col-md-6">
        <img src="../Image/message-received.png" alt="" id="image">
      </div>

    
      <div class="col-md-5">
        <div class="form-group">
          <label for="email">Email</label>
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="email@gmail.com" name="Email" class="form-control" id="email" required>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <i class="fas fa-pen block"></i>
          <input type="text" placeholder="subject" name="subject" required class="form-control" id="subject" required>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <i class="fas fa-paper-plane" id="plane"></i>
          <textarea id="msg" cols="10" rows="1" placeholder="Message" name="Message" required id="message-box"></textarea>
        </div>

          <div class="send">
          <button type="submit" id="send">Send</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- end of main-->




  <!--footer-->

  <footer id="footer">
    <p style="margin-bottom: 0;">RG Bangalon &copy; 2023 </p>
  </footer>

  <!--end of footer-->


  <!--script-->

  <script>
  $('#menu-btn').click(function() {
    $('#menu').toggleClass("active");
  })
  </script>

  <script src="../Javascript/Menu-user.js"></script>
  <script src="../Javascript//HideRecruitment.js"></script>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--script-->

</body>


</html>

<?php

  }
  else{
    header('location:LoginForm.php');
    session_destroy();
  }
unset($_SESSION['prompt']);
mysqli_close($connection);
?>