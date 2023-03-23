<?php

session_start();

include('Connection.php');

// $localhost = "localhost";
// $Username = "root.";
// $Password = "";
// $database = "human_resource 1";

// $connect = mysqli_connect($localhost, $Username, $Password, $database) or die ("Connection Failed");


if($_SERVER['REQUEST_METHOD'] == "POST") {

  $ip=getUserIpAdd();
  $time=time() -30;
  $check_attempt=mysqli_fetch_assoc(mysqli_query($connection, "select COUNT(*) as total_attempt from attempt WHERE time_count > $time and ip_address='$ip'"));

  $total_count=$check_attempt['total_attempt'];

  if($total_count==3){
          $_SESSION['errormessage']= 'The loginform has been locked please wait for 30seconds';

  } else{ 


$Username = mysqli_real_escape_string($connection, $_POST["Username"]);
$Password = mysqli_real_escape_string($connection, $_POST["Password"]);


if (!empty($Username) && !empty($Password)){
  $query = "SELECT * FROM adminlogin WHERE Username = '$Username' AND Password = '$Password'";

  $result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    
    $_SESSION['Username'] = $row['Username'];
    $_SESSION['Password'] = $row['Password'];

 
    
    header("location: Recruitment.php");

    $_SESSION['message'] = "Welcome Admin";
    mysqli_query($connection,"delete from attempt WHERE ip_address='$ip'");
 

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
} }

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
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="../Image/MyLogo-modified.png" type="image/x-icon">
      <title>Login</title>

      <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
      <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


      <!--MODAL FILE-->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!--CSS FILE-->
      <link rel="stylesheet" href="../Css/LoginForm.css">
      <link rel="stylesheet" href="">


</head>

<body>

        <?php 
      if(isset($_SESSION['errormessage'])){ ?>
        <script>
        Swal.fire({
          icon: 'error',
          text: "<?php echo $_SESSION['errormessage'];?>",
        })
        </script>
        <?php unset($_SESSION['errormessage']); }?>



  <div class="container">

        <div class="logo">
          <img src="../Image//logo.png" alt="">
        </div>
        <div class="image">
          <img src="../Image//post-a-job.png" class="image">
        </div>

  <div class="forms-container">

      <div class="sign-in">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="sing-in-form">

          <img src="..//Image//3135715.png" class="profile">
          <h2 class="title">Sign in</h2>

          <div class="input-field">
            <i class="fas fa-users"></i>
            <input type="text" placeholder="Username" name="Username" required>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" required>
          </div>

          <input type="submit" class="btn solid" name="signin" value="login">

          <div class="social-text">
            <a href="../Pages/ForgotPassword.php">Forgot your Password?</a>
          </div>

        </form>
      </div>
   
    </div>

   

  </div>



</body>
</html>