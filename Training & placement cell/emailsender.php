<?php
$to_email = "priyanka318.kolte@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
//$headers = "From: testclass619@gmail.com";

$headers  = 'From: testclass619@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';

$x=mail($to_email, $subject, $body, $headers);
var_dump($x);

if ($x) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>