<?php
require_once '../../vendor/autoload.php';

use Twilio\TwiML\MessagingResponse;

// Set the content-type to XML to send back TwiML from the PHP Helper Library
header("content-type: text/xml");

$response = new MessagingResponse();
$response->message(
    "Hi sedem it's the future you and i've come to warn you about impending successes, becareful don't let it get to your head
    try to help us many people us you can okay. and invest as much as you can remember 1.8 * 10^8"
);

echo $response;
