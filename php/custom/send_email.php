<?php
  // // Simple script to send a targeted email.
  // TODO: Channge the given email to the official male gotten for the site.
  // Email Sender.

  // TODO:  Make subject dynamic, based on use case.
  $to="sedem.amekpewu.3@gmail.com";
  $subject = 'the subject';
  $msg="hi this is an email form me to you";

  // Make headers dynamic, based on use case.
  $headers = 'From: AfriPrints@example.com' . "\r\n" .
              'Reply-To: AfriPrints@example.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  // Email Message.
  // TODO: Write script to send dynamic mail content based on the given use case.
  if(!mail($to, $subject, $msg, $headers)){
    // display error message.
    // TODO: Display appropriate template to handle this problem and prevent users from seeing errors.
    echo "Failure";
  }
 ?>
