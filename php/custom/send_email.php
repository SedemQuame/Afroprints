<?php
  // // Simple script to send a targeted email.
  // TODO: Channge the given email to the official mail from the user.
  // Email Sender.

  $to="sedem.amekpewu.3@gmail.com";
  $subject = 'the subject';
  // $msg="hi this is an email form me to you";
  $msg="im the champion, not you.";

  // Make headers dynamic, based on use case.
  $headers = 'From: AfriPrints@example.com' . "\r\n" .
              'Reply-To: AfriPrints@example.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  // Email Message.
  // TODO: Write script to send dynamic mail content based on the given use case.

  function sendEmail($to, $subject, $msg, $headers){
    if(mail($to, $subject, $msg, $headers)){
      return true;
    }else{
      return false;
    }
  }
 ?>
