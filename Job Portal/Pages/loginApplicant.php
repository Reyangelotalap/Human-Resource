<?php

session_start();

include('../Pages/connection.php');


// $localhost = "localhost";
// $Username = "root";
// $Password = "";
// $database = "human_resource 1";

// $connect = mysqli_connect($localhost, $Username, $Password, $database) or die ("Connection Failed");


if(isset($_POST['login'])){

  $ip=getUserIpAdd();
  $time=time() -30;
  $check_attempt=mysqli_fetch_assoc(mysqli_query($connection, "select COUNT(*) as total_attempt from attempt WHERE time_count > $time and ip_address='$ip'"));

  $total_count=$check_attempt['total_attempt'];

  if($total_count==3){
          $_SESSION['errormessage']= 'The loginform has been locked please wait for 30seconds';

  } else{ 


$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);


  $query = "SELECT * FROM regapplicant WHERE username = '$username'";

  $result = mysqli_query($connection, $query);   
if(mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    
    
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $passwordhash = $row['password'];

    if(password_verify($password, $passwordhash)){
        // if($row['user_type'] ==  "SUPER ADMIN") {
          mysqli_query($connection,"delete from attempt WHERE ip_address='$ip'");
          header("location: ../../ApplicantSide/index ");
        // }else if ($row['user_type'] == "HR ADMIN"){
        //   mysqli_query($connection,"delete from attempt WHERE ip_address='$ip'");
        //   header("location: index.php");
        //   exit(0);
        // }
    } else {
      $total_count++;
    $time_remain=3-$total_count;
    $time=time();
     if($time_remain==0){
      $_SESSION['errormessage']= 'The loginform has been locked please wait for 30 seconds';
     }else{
      $_SESSION['errormessage'] = " Invalid Credentials " .$time_remain. " attempts remaining";   
     }
   mysqli_query($connection, "insert into attempt(ip_address,time_count) values('$ip', '$time')");
    }
    
  }
  else 
  {
    $total_count++;
    $time_remain=3-$total_count;
    $time=time();
     if($time_remain==0){
      $_SESSION['errormessage']= 'The loginform has been locked please wait for 30 seconds';
     }else{
      $_SESSION['errormessage'] = " Invalid Credentials " .$time_remain. " attempts remaining";   
     }
   mysqli_query($connection, "insert into attempt(ip_address,time_count) values('$ip', '$time')");
  }
 }
} 

function getUserIpAdd(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else{
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

?>


<!DOCTYPE html>
<html>

<head>

  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../Image/MyLogo-modified.png" type="image/x-icon">
  <title>Login | RGBC</title>

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

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="../../Job Portal/Css//loginApplicant.css">
  <link rel="stylesheet" href="">



</head>


<body>

  <?php
  
  include '../../Job Portal/Pages//loading.php'
  
  ?>

  <?php 
      if(isset($_SESSION['errormessage'])){ ?>
  <script>
  Swal.fire({
    icon: 'error',
    text: "<?php echo $_SESSION['errormessage'];?>",
  })
  </script>
  <?php unset($_SESSION['errormessage']); }?>

  <section class="vh-100">

    <img src="../Image/MyLogo-modified.png" class="py-3" style="margin-left: 2rem; height: 10vh; cursor: pointer"
      onClick="location.href='../index.php'">


    <div class="login">
      <h2>Login</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="needs-validation" novalidate>

    
        <div class="login-form">
          <input type="text" name="username" id="username" placeholder="Username" minlength="8" maxlength="20" size="20"
            required  id="validationCustomUsername" >
            <div class="invalid-feedback">
          Please enter a username.
        </div>
        </div>

        <br>

        <div class="login-form">
          <input type="password" name="password" id="password" placeholder="Password" minlength="8" maxlength="20" size="20"
            required  id="validationCustom04">
          <span class="show-password" onclick="showPassword(this)">
          <ion-icon name="eye-off-outline"></ion-icon>
          </span>
          <div class="invalid-feedback">
        Please enter a password.
      </div>
        </div>

        <a href="../Pages/forgotApplicant" style="text-decoration: none; float: right" style=" font-size: 1.2rem">Forgot Password</a>
        
        <BR><p style="margin-top: 10px;">By Clicking the Login Button, you agree to our<BR> <a href="../Pages/termsandcondition"
            style="color: #0d6efd; text-align:center;">Term & Conditions</a> </p>
        <button class="button" name="login" type="submit">LOG IN</button>

        <span style=" font-size: 1.2rem; display: flex; justify-content: center ;"> Don't have an account? <a href="../Pages/regApplicant"  style=" text-decoration: none; right: 2rem; border: none; outline: none;"> Sign up here</a></span>
</form>
      </form>
    </div>

  </section>

  <footer id="footer">
    <p style="display: flex; align-items: center; justify-content: center; font-size: 18px; margin-top: -3rem">RG
      Bangalon &copy; 2023 All Rights Reserved. </p>
  </footer>




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


  <script>
  showPassword = (e) => {
    let PasswordInput = e.previousElementSibling;

    if (PasswordInput.type === 'password') {
      PasswordInput.type = 'text';
      e.querySelector('ion-icon').setAttribute('name', 'eye');
    } else {
      PasswordInput.type = 'password';
      e.querySelector('ion-icon').setAttribute('name', 'eye-off');
    }
  }
  </script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



  <script src="../JavaScript/RegistrationForm.js"></script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>