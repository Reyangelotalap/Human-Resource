<?php
session_start();
 include('../../crud/connection.php');  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../../PHP Mailer/vendor/autoload.php';
function send_mail($email, $name, $username, $password){
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
    $content = "Dear '.$name.' 'We would like to congratulate you on passing the online examination! We are impressed with your performance and are excited to move forward with your application.

    Your results demonstrate that you have the necessary skills and knowledge to succeed in this position, and we believe that you would be a valuable addition to our team.

    We will be in touch with you shortly to discuss next steps in the application process. In the meantime, if you have any questions or concerns, please don't hesitate to reach out to us.'
    
    
    Dear <strong>".$name."</strong>,
<br><br>
I am pleased to inform you that after reviewing your application and conducting interviews, we have selected you as the top candidate for the position of [Job Title] at [Company Name].
<br>
Your skills, experience, and qualifications make you an excellent fit for this role, and we are excited to have you join our team. You will be reporting to [Manager Name] and your starting date will be [Starting Date].
<br>
Please find attached a formal job offer letter, which outlines the terms and conditions of your employment, including your salary, benefits, and other relevant details. We kindly ask that you read the offer letter carefully, and let us know if you have any questions or concerns.
<br>
To accept the offer, please sign the offer letter and return it to us by [Date]. Once we receive your signed offer letter, we will initiate the onboarding process, which includes completing necessary paperwork and scheduling orientation.
<br>
We are confident that you will excel in your new role and make valuable contributions to our organization. We look forward to welcoming you to the team.
<br>
Here's your account that will used to login to ESS Portal: <br>
Username : ".$username." <br>
Password: ".$password." <br>
If you have any questions or concerns, please do not hesitate to contact me.
<br>><br>
Best regards,
<br>><br>><br>
RGBC HR Staff <br>
RGBC Lending Investor Company.
    
    
    
    ";



    

    
    $mail->MsgHTML($content); 
    if(!$mail->Send()) { 
        return false;
    } else {
    
        return true;
    }

} 

if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($connection, $_POST['r_id']); 
    $name = mysqli_real_escape_string($connection, $_POST['applicant_name']); 
    $job = mysqli_real_escape_string($connection, $_POST['applied_job']); 
    $status = mysqli_real_escape_string($connection, $_POST['status']); 
    $email = mysqli_real_escape_string($connection, $_POST['email']); 
    $random_number = rand(100, 999);
    $password_random_number = rand(1000, 9999);
    $username = "EMP". $random_number;
    $password = "#ESS". $password_random_number;
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    if(!empty($status)){
        $query = "INSERT INTO newlyhiredstatus_tbl(id, applicant_name, applied_job, status, email)
        VALUES('$id','$name','$job','$status','$email')";
        $result = mysqli_query($connection, $query);
        if($result){

            $query2 = "INSERT INTO ess_acounts(id, username, email, password) VALUES('$id','$username','$email','$passwordHashed')";
            $result2 = mysqli_query($connection, $query2);
            if($result2){
            send_mail("$email", "$name", "$username", "$password");

            $_SESSION['success'] = 'Successfully Hired';
            header("location: ../module-1/m1-page-7.php");
        }
        else{
            echo "ERROR";
        }
    }
    }

}

?>