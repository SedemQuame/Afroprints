<?php
  // Simple script to send a targeted email.

  // TODO: Channge the given email to the official male gotten for the site.
  // Email Sender.

  // Make subject dynamic, based on use case.
  $subject = 'the subject';

  // Make headers dynamic, based on use case.
  $headers = 'From: webmaster@example.com' . "\r\n" .
              'Reply-To: webmaster@example.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  // Email Message.
  // TODO: Write script to send dynamic mail content based on the given use case.

  
  if(mail($to, $subject, $msg, $headers)){
    // redirect to new page.
    // echo "Success";
  }else{
    // display error message.
    echo "Failure";
  }
?>
