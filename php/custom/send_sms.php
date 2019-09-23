<?php
require '../../vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC214c46532167b2de9f4bfb537a3191cf';
$auth_token = '49b51e75741fc205dc89c7b02b9d0aaf';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+19166190482";
$randomly_generated_number = 34;

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
      // '+15558675310',
      '+233546744163',
     // $phone_number,
    array(
        'from' => $twilio_number,
        'body' => 'Random number to validate account. '.$randomly_generated_number
    )
);
