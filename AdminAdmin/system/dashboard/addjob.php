
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
  <?php 
  include('../../crud/connection.php');
  ?>
</div>


<?php

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
  $fileName = $_FILES['file']['name'];
  $fileTempName = $_FILES["file"]["tmp_name"];
  $fileSize = $_FILES["file"]["size"];
  $fileError = $_FILES["file"]["error"];
  $fileType = $_FILES["file"]["type"];
  $folder = "../dashboard/imageStorage/" . $fileName;

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 5000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = $folder;
        move_uploaded_file($fileTempName, $fileDestination);

        if (!empty($file)) {
          $query = "INSERT INTO job_vacancies (`title`, `qualification`, `description`, `location`, `phone`, `email`, `salary`, `user_info`, `image`)
          VALUES ('".mysqli_real_escape_string($connection, $title)."', 
                  '".mysqli_real_escape_string($connection, $qualification)."', 
                  '".mysqli_real_escape_string($connection, $description)."', 
                  '".mysqli_real_escape_string($connection, $location)."', 
                  '".mysqli_real_escape_string($connection, $phone)."', 
                  '".mysqli_real_escape_string($connection, $email)."', 
                  '".mysqli_real_escape_string($connection, $salary)."', 
                  '".mysqli_real_escape_string($connection, $user_info)."', 
                  '$fileName')";

          $result = mysqli_query($connection, $query);

          if ($result) {
            // Show a success message
            echo "<script>
            swal({
              title: 'Success!',
              text: 'Successfully added!',
              icon: 'success'
            }).then(function() {
              // Redirect to a new page
              window.location = 'dashboard';
            });
            </script>";
          } else {
            // Show an error message
            echo "<script>
            swal({
              title: 'Error!',
              text: 'Data submission failed!',
              icon: 'error'
            });
            </script>";
          }
          
        } else {
          echo "<script>
            swal({
              title: 'Error!',
              text: 'Data submission failed!',
              icon: 'error'
            }).then(function() {
              // Redirect to a new page
              window.location = 'dashboard';
            });
            </script>";
        }
      } else {
        echo "<script>
            swal({
              title: 'Error!',
              text: 'Data submission failed!',
              icon: 'error'
            }).then(function() {
              // Redirect to a new page
              window.location = 'dashboard';
            });
            </script>";
      }
    } else {
      echo "<script>
      swal({
        title: 'Error!',
        text: 'Data submission failed!',
        icon: 'error'
      }).then(function() {
        // Redirect to a new page
        window.location = 'dashboard';
      });
      </script>";
    }
  } else {
    echo "<script>
    swal({
      title: 'Error!',
      text: 'Oops, something went wrong. Please try again later.',
      icon: 'error'
    }).then(function() {
      // Redirect to a new page
      window.location = 'dashboard';
    });
    </script>";
  }
}

?>