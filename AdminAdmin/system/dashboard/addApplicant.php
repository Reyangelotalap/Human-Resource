<?php
 include('../module-1/m1-page-1.php');
 include('../../crud/connection.php');
 
      if (isset($_POST['submit'])) {
        $id = $_POST['myid'];
      
        $file = $_FILES['file'];
        $applicant_name = $_POST['applicant_name'];
        $applied_job = $_POST['applied_job'];
        $email = $_POST['email'];
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "../dashboard/file_storage/" . $filename;
        $folderDestination = $folder;

        if (!empty($filename)) {
          move_uploaded_file($tempname, $folderDestination);
          $sql = "INSERT INTO applicant_resume( resume_file, applicant_name, email, applied_job ) VALUES ('$id','$filename', '$applicant_name', '$email', '$applied_job')";

          $result = mysqli_query($connection, $sql);

        if ($result) {
            // Show a success message
            echo "<script>
            swal({
              title: 'Success!',
              text: 'Successfully added!',
              icon: 'success'
            }).then(function() {
              // Redirect to a new page
              window.location = '../module-1/m1-page-1.php';
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
        } 
       
    }

?>