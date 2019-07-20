<?php
  // // Simple script to send a targeted email.
  // TODO: Channge the given email to the official male gotten for the site.
  // Email Sender.

  // TODO:  Make subject dynamic, based on use case.
  $to="sedem.amekpewu.3@gmail.com";
  $subject = 'the subject';
  $msg="hi this is an email form me to you";

  // Make headers dynamic, based on use case.
  $headers = 'From: webmaster@example.com' . "\r\n" .
              'Reply-To: webmaster@example.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  // Email Message.
  // TODO: Write script to send dynamic mail content based on the given use case.
  if(mail($to, $subject, $msg, $headers)){
    // display error message.
    // TODO: Display appropriate template to handle this problem and prevent users from seeing errors.
    echo "Failure";
  }else {
    echo "Some thing terrible might have happended.";
  }

  // $name = "Sedem Quame";
  // $SENDGRID_API_KEY = "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";
  // $data = array(
  //   "personalizations" => array(
  //     array(
  //       "to" => array(
  //         array(
  //           "email" => $to,
  //           "name" => $name
  //         )
  //       )
  //     )
  //   ),
  //   "from" => array(
  //     "email" => ""
  //   ),
  //   "subject" => $subject,
  //   "content" => array(
  //     array(
  //       "type" => "text/html",
  //       "value" => $msg
  //     )
  //   )
  // );
  //
  // $headers = array(
  //   "Authorization: Bearer" . $SENDGRID_API_KEY,
  //   "Content-Type: application/json"
  // );
  //
  // $ch = curl_init();
  // curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
  // curl_setopt($ch, CURLOPT_POST, 1);
  // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // $response = curl_exec($ch);
  // curl_close($ch);
 ?>
