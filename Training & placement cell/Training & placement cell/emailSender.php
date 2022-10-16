<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "testclass619@gmail.com";
  $mail->Password   = "Testclass@619";

  $mail->IsHTML(true);
  $mail->AddAddress("priyanka318.kolte@gmail.com", "Priyanka");
  $mail->SetFrom("nrcpune02@gmail.com", "NRC Pune");
  $mail->AddReplyTo("nrcpune02@gmail.com", "reply-to-name");
 // $mail->AddCC("ramdasbiradar@gmail.com", "cc-recipient-name");
  $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "<b>Hello Priyanka This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
?>