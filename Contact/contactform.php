<?php

if (isset($_POST['contact'])) {

  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "erik@ber-ger.one";
  $headers = "From: ". $emailFrom;
  $txt = "You have received an email from ". $name. ".\n\n". $message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.php?mailsend");
}
