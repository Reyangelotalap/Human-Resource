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
					header("Location: forgotApplicant?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);

				if($result == "The code is correct"){

					$_SESSION['forgot']['code'] = $code;
					header("Location: forgotApplicant?mode=enter_password");
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
					header("Location: forgotApplicant");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}

					header("Location: loginApplicant");
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

		$query = "update regapplicant set password = '$passwordhash' where email = '$email' limit 1";
		mysqli_query($connection,$query);

	}
	
	function valid_email($email){

		global $connection;

		$email = addslashes($email);

		$query = "select * from regapplicant where email = '$email' limit 1";		
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
  <title>RGBC | Forgot Password</title>


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

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


  <link rel="stylesheet" href="../Css/forgotApplicant.css">
</head>

<body>


  <?php

switch($mode){
	case 'enter_email':
		?>


  <section class="vh-100">

    <img src="../Image/MyLogo-modified.png" class="py-3" style="margin-left: 2rem; height: 10vh; cursor: pointer"
      onClick="location.href='../index'">


    <div class="enter_email">
      <h2>Forgot Password</h2>
      <form action="forgotApplicant?mode=enter_email" method="POST" class="needs-validation" novalidate>

      <span
              style="font-size: 17px;color:red; top: -3rem;  position: relative; display: flex; align-items: center; justify-content:center;">
              <br>
              <br>
              <?php
									foreach ($error as $err) {
										
										echo $err . "<br>";
									}
									?>
            </span>
      
        <div class="email-form">
          <input type="text" name="email" id="username" placeholder="Email" 
            required  id="validationCustomUsername" >
            <div class="invalid-feedback">
          Please enter a email.
        </div>
        </div>

        <br>
<!-- 
        <div class="login-form">
          <input type="text" name="password" id="password" placeholder="Password" minlength="8" maxlength="20" size="20"
            required  id="validationCustom04">
          <span class="show-password" onclick="showPassword(this)">
            <ion-icon name="eye"></ion-icon>
          </span>
          <div class="invalid-feedback">
        Please enter a password.
      </div>
        </div> -->

        <button class="button" name="login" type="submit">Next</button>
        <span style=" font-size: 1.2rem; display: flex; justify-content: center ;"> Don't have an account? <a href="../Pages/regApplicant"  style=" text-decoration: none; right: 2rem; border: none; outline: none;"> Sign up here</a></span>
</form>
      </form>
    </div>

  </section>

  <footer id="footer">
    <p style="display: flex; align-items: center; justify-content: center; font-size: 18px; margin-top: -3rem">RG
      Bangalon &copy; 2023 All Rights Reserved. </p>
  </footer>


  <?php

		break;
		
		case 'enter_code':
			?>
      

  <section class="vh-100">

<img src="../Image/MyLogo-modified.png" class="py-3" style="margin-left: 2rem; height: 10vh; cursor: pointer"
  onClick="location.href='../index'">


<div class="enter_email">
  <h2>Forgot Password</h2>
  <form action="forgotApplicant?mode=enter_code" method="POST" class="needs-validation" novalidate>

  <br>
  <br>
  <span
              style="font-size: 17px;color:red; top: -3rem;  position: relative; display: flex; align-items: center; justify-content:center;">
              <?php
									foreach ($error as $err) {
						
										echo $err . "<br>";
									}
									?>
            </span>
  
    <div class="email-form">
      <input type="text" name="code" id="username" placeholder="Code" 
        required  id="validationCustomUsername" >
        <div class="invalid-feedback">
      Please enter a code.
    </div>
    </div>

    <br>
<!-- 
    <div class="login-form">
      <input type="text" name="password" id="password" placeholder="Password" minlength="8" maxlength="20" size="20"
        required  id="validationCustom04">
      <span class="show-password" onclick="showPassword(this)">
        <ion-icon name="eye"></ion-icon>
      </span>
      <div class="invalid-feedback">
    Please enter a password.
  </div>
    </div> -->

    <button class="button" name="login" type="submit">Next</button>
    <button class="button" type="submit" onClick="location.href='../Pages/forgotApplicant'" style="margin-top: -2rem;">Start Over</button>

    <span style=" font-size: 1.2rem; display: flex; justify-content: center ;"> Don't have an account? <a href="../Pages/regApplicant"  style=" text-decoration: none; right: 2rem; border: none; outline: none;"> Sign up here</a></span>
</form>
  </form>
</div>

</section>

<footer id="footer">
<p style="display: flex; align-items: center; justify-content: center; font-size: 18px; margin-top: -3rem">RG
  Bangalon &copy; 2023 All Rights Reserved. </p>
</footer>




  <?php
			break;

			case 'enter_password':
				?>


  <section class="vh-100">

<img src="../Image/MyLogo-modified.png" class="py-3" style="margin-left: 2rem; height: 10vh; cursor: pointer"
  onClick="location.href='../index'">


<div class="enter_email">
  <h2>Forgot Password</h2>
  <form action="forgotApplicant?mode=enter_code" method="POST" class="needs-validation" novalidate>

  <br>
  <br>
  <span
              style="font-size: 17px;color:red; top: -3rem;  position: relative; display: flex; align-items: center; justify-content:center;">
              <?php
									foreach ($error as $err) {
		
										echo $err . "<br>";
									}
									?>
            </span>

    <br>

        
    <div class="email-form">
      <input type="password" name="password" id="password" placeholder="Password" minlength="8" maxlength="20" size="20"
        required  id="validationCustom04">
      <span class="show-password" onclick="showPassword(this)">
        <ion-icon name="eye"></ion-icon>
      </span>
      <div class="invalid-feedback">
      Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.
  </div>
    </div>

    
    <div class="email-form">
      <input type="password" name="password2" id="password" placeholder="Confirm Password" minlength="8" maxlength="20" size="20" required  id="validationCustom04" required
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <span class="show-password" onclick="showPassword(this)">
        <ion-icon name="eye"></ion-icon>
      </span>
      <div class="invalid-feedback">
      Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.
  </div>
    </div>

    <button class="button" name="login" type="submit">Next</button>


    <span style=" font-size: 1.2rem; display: flex; justify-content: center ;"> Don't have an account? <a href="../Pages/regApplicant"  style=" text-decoration: none; right: 2rem; border: none; outline: none;"> Sign up here</a></span>
</form>
  </form>
</div>

</section>

<footer id="footer">
<p style="display: flex; align-items: center; justify-content: center; font-size: 18px; margin-top: -3rem">RG
  Bangalon &copy; 2023 All Rights Reserved. </p>
</footer>



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

</body>

</html>