
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Management</title>

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


  <!--CSS FILE-->
  <link rel="stylesheet" href="../Css//Training.css">


</head>

<body>

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
              <h3>Admin</h3>
              <small>RGBC</small>
            </div>
          </div>

          <hr>

          <a href="" class="menu_link">
            <i class="las la-user-cog"></i>
            <p>Edit Profile</p>

          </a>
          <a href="" class="menu_link">
            <i class="las la-sign-out-alt"></i>
            <p>Logout</p>

          </a>

        </div>
      </div>

    </div>

    <h3 class="i-name">
    </h3>

    <!--MAIN-->


    <!--END OF MAIN-->


    <!--FOOTER-->
    <footer id="footer">
      <p>RG Bangalon &copy; 2023 </p>
    </footer>
    <!--END OF FOOTER-->


    <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
    </script>

    <script src="../Javascript/Menu-user.js"></script>

</body>

</html>