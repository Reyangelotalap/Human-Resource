<?php 
session_start();
$error = array();

require "mail_Applicant.php";

	if(!$connection = mysqli_connect("localhost","root","","human_resource 1")){

		die("could not connect");
	}



	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}

	//something is posted
	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				// code...
				$email = $_POST['email'];
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Please enter a valid email";
				}elseif(!valid_email($email)){
					$error[] = "That email was not found";
				}else{

					$_SESSION['forgot']['email'] = $email;
					send_email($email);
					header("Location: forgotEmployee.php?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);

				if($result == "The code is correct"){

					$_SESSION['forgot']['code'] = $code;
					header("Location: forgotEmployee.php?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;

			case 'enter_password':
				// code...
				$password = $_POST['password'];
				$password2 = $_POST['password2'];

				if($password !== $password2){
					$error[] = "Passwords do not match";
				}elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location: forgotEmployee.php");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}

					header("Location: loginEmployee.php");
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}

	function send_email($email){
		
		global $connection;

		$expire = time() + (60 * 1);
		$code = rand(10000,99999);
		$email = addslashes($email);

		$query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
		mysqli_query($connection,$query);

		//send email here
		send_mail($email,'Password reset',"Your code is " . $code);
	}
	
	function save_password($password){
		
		global $connection;
		$password = $_POST['password'];

		$passwordhash = password_hash($password, PASSWORD_DEFAULT);
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "update regemployer set password = '$passwordhash' where email = '$email' limit 1";
		mysqli_query($connection,$query);

	}
	
	function valid_email($email){

		global $connection;

		$email = addslashes($email);

		$query = "select * from regemployer where email = '$email' limit 1";		
		$result = mysqli_query($connection,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}

		return false;

	}

	function is_code_correct($code){
		global $connection;

		$code = addslashes($code);
		$expire = time();
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($connection,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "The code is correct";
				}else{
					return "The code is expired";
				}
			}else{
				return "The code is incorrect";
			}
		}

		return "The code is incorrect";
	}

	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Forgot Password</title>


  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

  <link rel="stylesheet" href="../Css//forgotEmployee.css">
</head>

<body>


  <?php

switch($mode){
	case 'enter_email':
		?>
  <img src="../Image//MyLogo-modified.png" onclick="location.href='../Pages/index.php'" class="users-pic">
  <img class="wave" src="../Image//forgot.png">
  <div class="container">
    <div class="img">
    </div>
    <div class="login-content">
      <form action="forgotApplicant.php?mode=enter_email" method="POST">
        <img src="../Image/3135715.png" alt="" class="icon">
        <h2 class="title">Forgot Password</h2>
        <br>
        <br>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="div">
            <h5>Enter your email</h5>
            <span
              style="font-size: 17px;color:red; top: -3rem;  position: relative; display: flex; align-items: center; justify-content:center;">
              <?php
									foreach ($error as $err) {
										// code...
										echo $err . "<br>";
									}
									?>
            </span>
            <input type="email" class="input" name="email" required>
          </div>
        </div>
				<a href="../Pages/loginApplicant.php" style="color: #F6C53F; text-transform:uppercase; float: left;">Back to
          login</a>
        <br>
        <br>
        <input type="submit" class="button" value="Next">
      </form>
    </div>
  </div>
  <?php

		break;
		
		case 'enter_code':
			?>
  <img src="../Image//MyLogo-modified.png" onclick="location.href='../Pages/index.php'" class="users-pic">
  <img class="wave" src="../Image//forgot.png">
  <div class="container">
    <div class="img">
    </div>
    <div class="login-content">
      <form action="forgotApplicant.php?mode=enter_code" method="POST">
        <img src="../Image/3135715.png" alt="" class="icon">
        <h2 class="title">Forgot Password</h2>
        <br>
        <br>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-key"></i>
          </div>
          <div class="div" id="confirm_password">
            <h5>Enter OTP code</h5>
            <span
              style="font-size: 17px;color:red; top: -3rem;  position: relative; display: flex; align-items: center; justify-content:center;">
              <?php
									foreach ($error as $err) {
										// code...
										echo $err . "<br>";
									}
									?>
            </span>
            <input type="text" class="input" name="code" required>
            <span class="show-pwd" onclick="showPwd(this)">
              <ion-icon name="eye-off-outline"></ion-icon>
            </span>
          </div>
        </div>
        <input type="submit" class="button" value="Next">
        <a href="../Pages/forgotApplicant.php">
          <input type="button" class="button" value="Start Over">
        </a>
      </form>
    </div>
  </div>
  <?php
			break;

			case 'enter_password':
				?>
  <img src="../Image//MyLogo-modified.png" onclick="location.href='../Pages/index.php'" class="users-pic">
  <img class="wave" src="../Image//forgot.png">
  <div class="container">
    <div class="img">
    </div>
    <div class="login-content">
      <form action="forgotApplicant.php?mode=enter_password" method="POST">
        <img src="../Image/3135715.png" alt="" class="icon">
        <h2 class="title">Forgot Password</h2>
        <br>
        <br>
        <div class="input-div one" id="confirm_password">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Enter your new password</h5>
            <span
              style="font-size: 17px;color:red; top: -3rem;  position: relative; display: flex; align-items: center; justify-content:center;">
              <?php
									foreach ($error as $err) {
										// code...
										echo $err . "<br>";
									}
									?>
            </span>
            <input type="password" class="input" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            <span class="show-pwd" onclick="showPwd(this)">
              <ion-icon name="eye-off-outline"></ion-icon>
            </span>
          </div>
        </div>
        <div class="input-div one" id="confirm_password">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Retype password</h5>
            <input type="password" class="input" name="password2" required>
            <span class="show-pwd" onclick="showPwd(this)">
              <ion-icon name="eye-off-outline"></ion-icon>
            </span>
          </div>
        </div>
        <input type="submit" class="button" value="Next">
      </form>
    </div>
  </div>
  <?php
				break;
		
		default:
		//code
		break;
}


?>




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