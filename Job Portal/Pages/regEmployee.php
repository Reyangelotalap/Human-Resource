<?php

include ("connection.php");
include ("function.php");

$msg = "";



if(isset($_POST['signup']))
{
  //something posted
  $user_id = random_num(20);
  $companyName = $connection->real_escape_string($_POST['companyName']);
  $firstname = $connection->real_escape_string($_POST['firstname']);
  $lastname = $connection->real_escape_string($_POST['lastname']);
  $username = $connection->real_escape_string($_POST['username']);
  $email = $connection->real_escape_string($_POST['email']);
  $password = $connection->real_escape_string($_POST['password']);
  $passwordhash = password_hash($password, PASSWORD_DEFAULT);

//email checking  

$email_check = "SELECT email FROM regemployer WHERE email = '$email'";
$result = mysqli_query($connection, $email_check);
if(mysqli_num_rows($result) > 0){
  $msg = "This email is already used";
}else{
  


  if(!empty($user_id) && !empty($firstname) && !empty($lastname)&& !empty($email)&& !empty($passwordhash) && !empty($companyName)&& !empty($username)) 
  {
  
    $query = "INSERT INTO regemployer (user_id, firstname, lastname, password, email, companyName, username) VALUES ('$user_id','$firstname','$lastname', '$passwordhash', '$email', '$companyName', '$username' )";

          mysqli_query($connection,$query);

          echo '<script type = "text/javascript"> alert("Your successfully Sign Up")</script>';

          header("location: loginEmployee.php");
          die;
  }else{

    echo "Please enter some valid information";

  }
  
}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Registration Form</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- Css file -->
  <link rel="stylesheet" href="../Css/regEmployer.css">
  

</head>

<body>

  <?php
  
  include '../../Job Portal/Pages/loading.php'
  
  ?>

  <!--Start of Signup-->
  <img src="../Image//MyLogo-modified.png" onclick="location.href='../../Job Portal/index.php'" class="users-pic">
  <img class="wave" src="../Image//Business deal-rafiki (1).png">

  <div class="container">
    <div class="img">
    </div>
    <div class="login-content">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <img src="../Image/3135715.png" class="icon">
        <h2 class="title">Sign Up</h2>

        <?php if ($msg !="")  echo $msg . "<br><br>"; ?>


        <div class="input-div one">
          <div class="i">
            <i class="fas fa-id-card-alt"></i>
          </div>
          <div class="div">
            <h5>Company name</h5>
            <input type="text" class="input" name="companyName" required>
          </div>
        </div>

        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Firstname</h5>
            <input type="text" class="input" name="firstname" required>
          </div>
        </div>
        
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Lastname</h5>
            <input type="text" class="input" name="lastname" required>
          </div>
        </div>

        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" name="username" required>
          </div>
        </div>

        <div class="input-div one">
          <div class="i">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="div">
            <h5>Email</h5>
            <input type="email" class="input" name="email" required>
          </div>
        </div>

        <div class="input-div pass" id="confirm_password">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            <span class="show-pwd" onclick="showPwd(this)">
              <ion-icon name="eye-off-outline"></ion-icon>
            </span>
          </div>
        </div>


        <br>
        <a href="../Pages/loginEmployee.php" style="color: #F6C53F; text-transform:uppercase; float: left;">I have an
          account</a>
        <br>
        <br>
        <p style="margin-top: 10px;">By Clicking the Sign Up Button, you agree to our <a href="#"
            style="color: #0d6efd; text-align:center;">Term & Conditions</a> </p>
        <input type="submit" class="button" value="Signup as Employer" name="signup" style="letter-spacing: 1px;">

      </form>
    </div>
  </div>



  <!-- js file -->

  <script>
  const inputs = document.querySelectorAll(".input");


  function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
  }

  function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }


  inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
  });
  </script>

  <script src="../JavaScript/OpenMenu.js"></script>
  <script src="../JavaScript//RegistrationForm.js"></script>

</body>

</html>