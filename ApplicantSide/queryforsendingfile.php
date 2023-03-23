

<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

<?php




include('../ApplicantSide/index.php');
include('../Job Portal/Pages/connection.php');

if (isset($_POST['submit'])) {
  $id = $_POST['myid'];
  $file = $_FILES['file'];
  $applicant_name = $_POST['applicant_name'];
  $applied_job = $_POST['applied_job'];
  $email = $_POST['email'];
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "../Pages/resumeStorage/" . $filename;
  $folderDestination = $folder;

  if (!empty($filename)) {
    move_uploaded_file($tempname, $folderDestination);
    $sql = "INSERT INTO applicant_resume(applicant_id, resume_file, applicant_name, email, applied_job ) VALUES ('$id','$filename', '$applicant_name', '$email', '$applied_job')";
    $result = mysqli_query($connection, $sql);
    
// Show a success message
echo "<script>
swal({
 
  text: 'You are successfully registered!',

}).then(function() {
  // Redirect to a new page
  window.location = '../Pages/loginApplicant.php';
});
</script>";

    header("location: index.php");
  } else {
    $_SESSION['errorMessage'] = "Failed to upload file";
  }
}


?>


