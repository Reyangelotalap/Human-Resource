
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
  <?php 
include '../../Job Portal/Pages/connection.php'; 
  ?>
</div>
<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../PHP Mailer/vendor/autoload.php';

function notify_applicant ($email,$applicant_name){
  
  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = 'rgbcmicrofinance@gmail.com';   //SMTP username
  $mail->Password   = 'atfytaudvsfefsxw';     
  $mail->IsHTML(true);
  $mail->AddAddress($email, "esteemed customer");
  $mail->SetFrom("rgbcmicrofinance@gmail.com", "");
  $mail->Subject = "Appreciation Message";
  $content = "Dear '.$applicant_name.' 'I wanted to take a moment to thank you for submitting your resume. We appreciate the time and effort you put into your application, and we were impressed with your qualifications and experience.
  
  We understand the effort it takes to prepare and submit a job application, and we want to assure you that your application has been received and will be carefully reviewed. We are committed to finding the best candidate for this role, and we believe that you could be a great fit for our team.
  
  If your qualifications and experience match what we are looking for, we will contact you for an interview. In the meantime, if you have any questions or would like to follow up on your application, please don't hesitate to reach out to us.
  
  Thank you again for your interest in joining our team. We wish you all the best in your job search. ' ";


  
  $mail->MsgHTML($content); 
  if(!$mail->Send()) { 
    return false;
  } else {
   
    return true;
  }
}


      if (isset($_POST['submit'])) {

        $id = $_POST['reg_id'];
      
        $file = $_FILES['file'];
        $contact = $_POST['contact'];
        $applicant_name = $_POST['applicant_name'];
        $applied_job = $_POST['applied_job'];
        $email = $_POST['email'];
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "../../AdminAdmin/system/dashboard/file_storage/" . $filename;
        $folderDestination = $folder;

        if (!empty($filename)) {
          move_uploaded_file($tempname, $folderDestination);
          
          $sql = "INSERT INTO applicant_resume( reg_id,  resume_file, applicant_name, email, contact, applied_job ) VALUES ('$id',  '$filename', '$applicant_name', '$email', '$contact', '$applied_job')";


          $result = mysqli_query($connection, $sql);

        if ($result) {

          notify_applicant("$email" , "$applicant_name");

            // Show a success message
            echo "<script>
            swal({
              title: 'Success!',
              text: 'Your file is successfully submitted!',
              icon: 'success'
            }).then(function() {
              // Redirect to a new page
              window.location = '../index';
            });
            </script>";
          } else {
            // Show an error message
            echo "<script>
            swal({
              title: 'Error!',
              text: 'Data submission failed!',
              icon: 'error'
              window.location = '../index';
            });
            </script>";
          }
        } 
       
    }

?>

