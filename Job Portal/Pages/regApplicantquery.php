
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

<?php

include('../Pages/connection.php');
include ("function.php");
include('../Pages/regApplicant.php');



if(isset($_POST['signup']))
{
  //something posted
  $user_id = random_num(20);
  $firstname = $connection->real_escape_string($_POST['firstname']);
  $lastname = $connection->real_escape_string($_POST['lastname']);
  $username = $connection->real_escape_string( $_POST['username']);
  $email = $connection->real_escape_string($_POST['email']);
  $password = $connection->real_escape_string($_POST['password']);
  $passwordhash = password_hash($password, PASSWORD_DEFAULT);
  $profile = "default.png";

//email checking  

$email_check = "SELECT email FROM regapplicant WHERE email = '$email'";
$result = mysqli_query($connection, $email_check);
if(mysqli_num_rows($result) > 0){
  $error []= "<span class='text-danger'>That email was taken already.</span>";
}else{
  



  if(!empty($user_id) && !empty($firstname) && !empty($lastname)&& !empty($username)&& !empty($email)&& !empty($passwordhash)) 
  {
  
    $query = "INSERT INTO regapplicant (user_id, firstname, lastname, username, password, email, image) 
    VALUES ('$user_id','$firstname','$lastname', '$username', '$passwordhash', '$email', '$profile')";

          mysqli_query($connection,$query);

        // Show a success message
        echo "<script>
        swal({
         
          text: 'You are successfully registered!',
   
        }).then(function() {
          // Redirect to a new page
          window.location = '../Pages/loginApplicant';
        });
        </script>";
          
  }else{

   

  }
  
}

}

?>