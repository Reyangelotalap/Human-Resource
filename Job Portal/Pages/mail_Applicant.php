<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;


  require '../../Admin/PHP Mailer/vendor/autoload.php';
  require '../../Admin/PHP Mailer/vendor/phpmailer/phpmailer/src/Exception.php';
  require '../../Admin/PHP Mailer/vendor/phpmailer/phpmailer/src/SMTP.php';
  require '../../Admin/PHP Mailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    


function send_mail($recipient,$subject,$message)
{

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = 'rgbcmicrofinance@gmail.com';   //SMTP username
  $mail->Password   = 'atfytaudvsfefsxw';     
  $mail->IsHTML(true);
  $mail->AddAddress($recipient, "esteemed customer");
  $mail->SetFrom("rgbcmicrofinance@gmail.com", "");
  $mail->Subject = $subject;
  $content = $message;
  $mail->MsgHTML($content); 
  if(!$mail->Send()) { 
    return false;
  } else {
    echo "Email sent successfully";
    return true;
  }

}

?>