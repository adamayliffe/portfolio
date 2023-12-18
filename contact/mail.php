<?php

  $userName = $_POST['firstname'];
  $userName = $_POST['lastname'];
  $userEmail = $_POST['Email'];
  $messageSubject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "adamrayliffe@gmail.com"
  $body = "";

  $body .="From:".$userName. "\r\n";
  $body .="Email:".$userEmail. "\r\n";
  $body .="Message:".$message. "\r\n";

mail($to, $messageSubject, $body);

?>
