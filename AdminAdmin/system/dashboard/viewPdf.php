<?php
require_once "../../crud/connection.php";



// Retrieve the PDF data from the database
$id = $_GET['id'];
$sql = "SELECT  * FROM applicant_resume WHERE id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$applied_job = $row['applied_job'];
$applicant_name = $row['applicant_name'];
$email = $row['email'];
$resume_file = $row['resume_file'];

// Convert the binary data to a base64-encoded string
$pdf_base64 = base64_encode($resume_file);

// Create an iframe tag with the PDF data as the source




 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <iframe <?php echo 'src="../dashboard/file_storage/' . $row['resume_file'] . '"'; ?> height="1000" width="100%"></iframe>
  
  </body>
</html>