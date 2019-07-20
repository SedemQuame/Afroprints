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

//   # Include the Autoloader (see "Libraries" for install instructions)
// require '../../vendor/autoload.php';
// use Mailgun\Mailgun;
// # Instantiate the client.
// $mgClient = new Mailgun('defbeb69b30d0851faa15bdb2644384b-fd0269a6-330973a4');
// $domain = "sandboxcc627e3c927541b881e3578abb398416.mailgun.org";
// # Make the call to the client.
// $result = $mgClient->sendMessage($domain, array(
//   'from'    => 'sandboxcc627e3c927541b881e3578abb398416.mailgun.org',
//   'to'      => 'sedem.amekpewu.3@gmail.com',
//   'subject' => 'Email Stuff',
//   'text'    => 'Hey! Sedem whatsapp? Been awhile see you working hard over here.'
// ));
// ?>
