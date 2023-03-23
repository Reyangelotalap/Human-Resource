<?php

session_start();

require_once "connection.php";


if(isset($_POST['login'])){

  $ip=getUserIpAdd();
  $time=time() - 30;
  $check_attempt=mysqli_fetch_assoc(mysqli_query($connection, "select COUNT(*) as total_attempt from attempt WHERE time_count > $time and ip_address='$ip'"));

  $total_count=$check_attempt['total_attempt'];

  if($total_count==3){
          $_SESSION['errormessage']= 'The loginform has been locked please wait for 30seconds';

  } else{ 


$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);


  $query = "SELECT * FROM ess_acounts WHERE username = '$username'";

  $result = mysqli_query($connection, $query);   
if(mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
  
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $passwordhash = $row['password'];

    if(password_verify($password, $passwordhash)){
          // mysqli_query($connection, "delete from attempt WHERE ip_address='$ip'");
          header("location: ../../EmployeeSide/Pages/index.php");

    } else {
      $total_count++;
    $time_remain=3-$total_count;
    $time=time();
     if($time_remain==0){
      $_SESSION['errormessage']= 'The loginform has been locked please wait for 30 seconds';
     }else{
      $_SESSION['errormessage'] = " Invalid Credentials " .$time_remain. " attempts remainingssss";   
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
      $_SESSION['errormessage'] = " Invalid Credentials " .$time_remain. " attempts remainingqqqqq";   
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
  <title>Login Form</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../Job Portal/Image/MyLogo-modified.png">


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

  <!-- modal -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- css file -->
  <link rel="stylesheet" href="../Css//loginEmployee.css">


</head>

<body>

<?php
  
  include '../Pages//loading.php'
  
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




<br>
  <!-- <div class="circle"></div> -->
  <div class="container">

    <div class="login-content">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <img src="../Image/MyLogo-modified.png" class="icon" style="cursor: pointer;">
        <h2 class="title">Welcome to ESS PORTAL</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" name="username" required>
          </div>
        </div>
        <div class="input-div pass" id="confirm_password">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="password" required>
            <span class="show-pwd" onclick="showPwd(this)">
              <ion-icon name="eye-off-outline"></ion-icon>
            </span>
          </div>
        </div>
        <br>
      <!--  <a href="../Pages/regEmployee.php"
          style="float:  left; color: #F6C53F; font-size: 15px; text-transform:uppercase">Create an account</a>-->
        <a href="../Pages/forgotEmployee.php" style="color: #0d6efd; text-transform:uppercase">Forgot Password?</a>
        <br>
        <br>
       <!-- <p style="margin-top: 10px;">By Clicking the Login Button, you agree to our <a href="../../EmployeeSide/Pages/termsandcondition.php"
            style="color: #0d6efd; text-align:center;">Term & Conditions</a> </p>-->
        <input type="submit" class="btn" value="Login" name="login">

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

  <script src="../JavaScript/RegistrationForm.js"></script>

</body>

</html>