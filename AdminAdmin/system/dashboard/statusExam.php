<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
    <?php include ('../module-2/m2-page-1.php');
    include('../../crud/connection.php');
  ?>
</div>


<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../../PHP Mailer/vendor/autoload.php';

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
  $content = "Dear '.$applicant_name.' 'We would like to congratulate you on passing the online examination! We are impressed with your performance and are excited to move forward with your application.

Your results demonstrate that you have the necessary skills and knowledge to succeed in this position, and we believe that you would be a valuable addition to our team.

We will be in touch with you shortly to discuss next steps in the application process. In the meantime, if you have any questions or concerns, please don't hesitate to reach out to us.' ";


  
  $mail->MsgHTML($content); 
  if(!$mail->Send()) { 
    return false;
  } else {
   
    return true;
  }
}




if(isset($_POST['update']))
{
    // get form data
    $id = $_POST['s_id'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $applicant_name = $_POST['applicant_name'];
    $resume_file = $_POST['resume_file'];
    $applied_job = $_POST['applied_job'];

    
    // insert record into examination table

    if ($status == "passed") {
        $query = "INSERT INTO examination_status ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` ,  `status` ) 
        VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job',  '$status')";
    } else if ($status == "failed") {
        $query = "INSERT INTO examination_status ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job', '$resume_file' , '$status')";
    } 

    if($query_run = mysqli_query($connection, $query)){
       
      $id = $_POST['s_id'];
      $score = $_POST['score'];
      
      $query2 = "UPDATE examination_status SET exam_score = '$score' WHERE id = '$id' ";
      $results = mysqli_query($connection, $query2);

      if($results){

    // delete record from initial interview table
    $query = "DELETE FROM `examination_tbl` WHERE id=$id ";
    $query_run = mysqli_query($connection, $query);
    
    // redirect to appropriate page
    if($query_run)
    {

        notify_applicant("$email" , "$applicant_name");

        echo "<script>
        swal({
            title: 'Success',
            text: 'Status updated successfully',
            icon: 'success',
            button: 'Ok',
        }).then(() => {
            window.location.href = '../module-2/m2-page-1';
        });
    </script>";
        header("Location: ../module-2/m2-page-1");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update");
    }
}
}
}
?>