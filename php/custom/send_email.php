<?php
  // Simple script to send a targeted email.

  // TODO: Channge the given email to the official male gotten for the site.
  // Email Sender.
  $to = "sedem.amekpewu.3@gmail.com";

  // Make subject dynamic, based on use case.
  $subject = 'the subject';

  // Make headers dynamic, based on use case.
  $headers = 'From: webmaster@example.com' . "\r\n" .
              'Reply-To: webmaster@example.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  // Email Message.
  // TODO: Write script to send dynamic mail content based on the given use case.

  mail($to, $subject, $email_msg, $headers);

?>
