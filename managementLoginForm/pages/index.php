<!Doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">

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

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- css file -->
  <link rel="stylesheet" href="../css/index.css">


</head>

<body>

    <div class="wrapper">
      <img src="../../Job Portal/Image/MyLogo-modified.png" alt="" class="img-fluid" style="height: 10vh;">
      <br>
      <br>
      <header>Login to Your account</header>
      <form action="" method="post" onsubmit="return validateForm()">
        <div class="field username">
          <div class="input-area">
            <input type="text" placeholder="Username" name="username" id="username">
            <i class="icon fas fa-envelope"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt" id="username-error" style="font-size: 13px;">Please enter your username.</div>
        </div>
        <div class="field password">
          <div class="input-area">
            <input type="password" placeholder="Password" name="password" id="password">
            <i class="icon fas fa-lock"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt" id="password-error" style="font-size: 13px;">Please enter your password.</div>
        </div>


        <input type="submit" value="Login" name="login">
      </form>
    </div>
    

    <?php

session_start();

include '../../Job Portal/Pages/connection.php';

if (isset($_POST['login']))
        {
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            $query = mysqli_query($connection, "SELECT * FROM admin_account WHERE password='$password' and username='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row    = mysqli_num_rows($query);
            
            if ($num_row > 0) 
            {           
              if ($row['role']=="Hr1 Admin") {
                // code...
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                echo '<script type="text/javascript">
                swal("' . $row['firstname'] . '' . " " . '' . $row['lastname'] . '", "Welcome back, HR1 Admin.", "success").then(function() {
                window.location = "../../AdminAdmin/system/dashboard/dashboard";});
              </script>';
                exit();
                 }else if($row['role']==""){
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                      echo '<script type="text/javascript">
                swal("' . '", "Welcome back, Admin.", "success").then(function() {
                window.location = "";});
              </script>';
              exit();
                 }else if($row['role']==""){
                   $_SESSION['fname']=$row['fname'];
                $_SESSION['lname']=$row['lname'];
                      echo '<script type="text/javascript">
                swal("' . '", "Welcome back,  Admin.", "success").then(function() {
                window.location = "";});
              </script>';
              exit();
                 }else if($row['role']==""){
                   $_SESSION['fname']=$row['fname'];
                $_SESSION['lname']=$row['lname'];
                      echo '<script type="text/javascript">
                swal("' . $row['fname'] . '' . " " . '' . $row['lname'] . '", "Welcome back,  Manager.", "success").then(function() {
                window.location = "";});
              </script>';
              exit();
                  }else if($row['role']==""){
                     $_SESSION['fname']=$row['fname'];
                $_SESSION['lname']=$row['lname'];
                      echo '<script type="text/javascript">
                swal("' . $row['fname'] . '' . " " . '' . $row['lname'] . '", "Welcome back, Manager.", "success").then(function() {
                window.location = "";});
              </script>';
              exit();
               }else if($row['role']==""){
                   $_SESSION['fname']=$row['fname'];
                $_SESSION['lname']=$row['lname'];
                      echo '<script type="text/javascript">
                swal("' . $row['fname'] . '' . " " . '' . $row['lname'] . '", "Welcome back, Manager.", "success").then(function() {
                window.location = "";});
              </script>';
              exit();
                  }
              }
              else {
                echo '<script type="text/javascript">
                    swal("ERROR!", "Username or password is incorrect!", "error");
                </script>';
            }
    }


?>

    <script>
    // Get the input fields and error elements
    const usernameField = document.getElementById("username");
    const passwordField = document.getElementById("password");
    const usernameError = document.querySelector(".username .error-txt");
    const passwordError = document.querySelector(".password .error-txt");

    // Add event listeners for keyup events on the input fields
    usernameField.addEventListener("keyup", function() {
      if (usernameField.value.length > 0) {
        usernameField.style.border = "1px solid green";
      } else {
        usernameField.style.border = "";
      }
    });

    passwordField.addEventListener("keyup", function() {
      if (passwordField.value.length > 0) {
        passwordField.style.border = "1px solid green";
      } else {
        passwordField.style.border = "";
      }
    });

    // Add event listener for submit event on the form
    document.querySelector("form").addEventListener("submit", function(event) {
      // Prevent the form from submitting if the username or password is blank
      if (usernameField.value.trim() === "") {
        usernameField.style.border = "1px solid red";
        usernameError.style.display = "block";
        event.preventDefault();
      }
      if (passwordField.value.trim() === "") {
        passwordField.style.border = "1px solid red";
        passwordError.style.display = "block";
        event.preventDefault();
      }
    });
    </script>


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>


</body>

</html>