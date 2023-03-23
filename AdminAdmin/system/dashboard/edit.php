<?php

include('../../crud/connection.php');

if(isset($_GET['Id'])) {
  $Id = $_GET['Id'];
  $query = "SELECT * FROM job_vacancies WHERE Id = '$Id'";
  $result = mysqli_query($connection, $query);
  $row = $result->fetch_assoc();
} else {
  $row = null;
}

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $salary = $_POST['salary'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $location = $_POST['location'];
  $user_info = $_POST['user_info'];
  $qualification = $_POST['qualification'];
  
  $file = $_FILES['file'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];
  
  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  $allowed = array('jpg', 'jpeg', 'png');
  
  if(in_array($fileExt, $allowed)){
    if($fileError === 0){
      if($fileSize < 5000000){
        $fileNameNew = uniqid('', true) . "." . $fileExt;
        $fileDestination = '../uploads/' . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        
        $query = "INSERT INTO job_vacancies ( `employer_id`, `title`, `qualification`, `description`, `location`, `phone`, `email`, `salary`, `user_info`, `image`) VALUES ('$id', '$title', '$qualification',  '$description', '$location', '$phone', '$email', '$salary', '$user_info', '$fileNameNew' ) "; 

        $result = mysqli_query($connection, $query);

        header("location: dashboard.php");
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error uploading your file!";
    }
  } else {
    echo "You cannot upload files of this type!";
  }
}

?>