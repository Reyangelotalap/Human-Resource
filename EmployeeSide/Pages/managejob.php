<?php

session_start();

include '../../Job Portal/Pages/connection.php';

if (isset($_SESSION['username'], $_SESSION['password'])) {

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant</title>


  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="shortcut icon" href="../../EmployeeSide/Image/apple-touch-icon.png" type="image/x-icon">
  <!--  -->

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">



  <!-- css file -->
  <link rel="stylesheet" href="../Css/managejob.css">


</head>

<body>

  <header class="header">
    <div class="header__container">
      <img src="../Image/pngegg.png" alt="" class="header__img">

      <a href="#" class="header__logo">Hello Recruiter</a>

      <div class="header__search">
        <input type="search" placeholder="Search" class="header__input">
        <i class='bx bx-search header__icon'></i>
      </div>

      <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
      </div>
    </div>
  </header>

  <!-- nav -->
  <div class="nav" id="navbar">
    <nav class="nav__container">
      <div>
        <a href="#" class="nav__link nav__logo">
          <img src="../image/pngegg.png" class="header__img">
          <span class="nav__logo-name"></span>
        </a>

        <div class="nav__list">
          <div class="nav__items">
            <h3 class="nav__subtitle">Profile</h3>

            <a href="../Pages/index.php" class="nav__link active">
              <i class='bx bx-home nav__icon'></i>
              <span class="nav__name">Home</span>
            </a>

            <div class="nav__dropdown">
              <a href="#" class="nav__link">
                <i class='bx bx-user nav__icon'></i>
                <span class="nav__name">Profile</span>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
              </a>

              <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                  <a href="#" class="nav__dropdown-item">Change Passwords</a>
                  <a href="#" class="nav__dropdown-item">Mail</a>
                  <a href="#" class="nav__dropdown-item">Accounts</a>
                </div>
              </div>
            </div>

            <a href="#" class="nav__link">
              <i class='bx bx-message-rounded nav__icon'></i>
              <span class="nav__name">Messages</span>
            </a>
          </div>

          <div class="nav__items">
            <h3 class="nav__subtitle">Menu</h3>

            <div class="nav__dropdown">
              <a href="../Pages/managejob.php" class="nav__link">
                <i class='bx bx-bell nav__icon'></i>
                <span class="nav__name">Manage Job</span>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
              </a>

              <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                  <a href="../Pages/inactive.php" class="nav__dropdown-item">Inactive Job</a>
                  <a href="../Pages/activejob.php" class="nav__dropdown-item">Active Job</a>
                  <a href="../Pages/addjob.php" class="nav__dropdown-item">Add Job</a>
                </div>
              </div>

            </div>

            <a href="#" class="nav__link">
              <i class='bx bx-user nav__icon'></i>
              <span class="nav__name">Applicant</span>
            </a>
            <!-- <a href="#" class="nav__link">
              <i class='bx bx-bookmark nav__icon'></i>
              <span class="nav__name">Add Job</span>
            </a> -->
          </div>
        </div>
      </div>

      <a href="../../EmployeeSide/Image/android-chrome-192x192.png" class="nav__link nav__logout">
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>

  <!-- content -->

  <main>

    <h2 style="text-transform: uppercase;">Manage Job</h2>

    <table>
      <tr>
        <th>Job</th>
        <th>Status</th>
        <th style="text-align: center;">Action</th>
      </tr>
      <tr>
        <td>John Doe</td>
        <td>Active</td>
        <td>
          <button>Active</button>
          <button class="inactive">Inactive</button>
        </td>
      </tr>
    </table>

    




    </section>
  </main>

  <!-- js file -->
  <script>
  var btn = document.getElementById("btn");
  var status = document.getElementById("status");
  btn.addEventListener("click", function() {
    if (btn.innerHTML === "Inactivate") {
      btn.innerHTML = "Activate";
      status.innerHTML = "Inactive";
    } else {
      btn.innerHTML = "Inactivate";
      status.innerHTML = "Active";
    }
  });
  </script>
  <script src="../Javascript/openToggle.js"></script>



</body>

</html>

<?php
} else {
  header("location: ../../Job Portal/Pages/loginEmployee.php");
  session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($connection);
?>