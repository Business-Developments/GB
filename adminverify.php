<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  $recipientEmail=$_SESSION['email'];  // Use a different variable name for the session email

  //Import PHPMailer classes into the global namespace
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require 'vendor/autoload.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'loosphp@gmail.com';                    //SMTP username
      $mail->Password   = 'cuju aful hxns kawi';                  //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      $rand = rand(1111, 9999);
      //Recipients
      $recipientEmail = $recipientEmail;  // Example recipient email address
      $mail->setFrom('loosphp@gmail.com', 'OTP');
      $mail->addAddress($recipientEmail, 'Subrata');              // Add a recipient

      //Content
      $mail->isHTML(true);                                        //Set email format to HTML
      $mail->Subject = 'This is your one-time password: ' . $rand;
      $mail->Body    = 'Wellcome to <h3 style="color:red;background:black;padding:5px;text-align:center;">Global Business Development</h3><br>Your OTP is <b>' . $rand . '</b><br> if you have any issue contact on <b><a href="tel:+91 9382085005" style="text-decoreation:none;color:white;background:black;padding:3px;border-radius:6px;">+91 9382085005</a></b><br><br><br><br><b>Business Address :</b><br>Gorgaon;<br>Sector 20;<br>Hariyana;<br>Near ramchowk<br>Gali No 15; <br> H.No 365';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      if ($mail->send()) {
        echo ' Otp has been sent to ' . $recipientEmail . " successfully.";
         $_SESSION['otps']=$rand;
         header( "refresh:1;url=adminOtp.php" );
      };
           } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo} <a href='admin.php'>Back</a>";
      
  }
?>