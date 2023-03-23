<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader//
// require 'PHP Mailer/vendor/autoload.php';
require '../PHP Mailer/vendor/autoload.php';
require '../PHP Mailer/vendor/phpmailer/phpmailer/src/Exception.php';
require '../PHP Mailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require '../PHP Mailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$subject = $_POST['subject'];
$email = $_POST['Email'];
$message = $_POST['Message'];
try {
    //Server settings
    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rgbcmicrofinance@gmail.com';                     //SMTP username
    $mail->Password   = 'atfytaudvsfefsxw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, 'RGBCMicrofinance');
    $mail->addAddress($email, 'Joe User');     //Add a recipient
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $subject;

    $mail->send();
    echo "<script>alert('Message has been sent'); window.location='Applicant.php'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}