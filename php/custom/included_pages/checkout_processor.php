<?php
/*
*It will be prudent, to populate data of registered users into
the text field automatically. 
*/
// User name.
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

// Address information.
$address = $_POST['address'];
$extra_address_info = $_POST['address_extra_info'];
$locale = $_POST['locale'];

// User's Contact Information.
$format = $_POST['format'];
$number = $_POST['phone_number'];
$phone_number = $format . ' ' . $number;
$email_address = $_POST['email_address'];

if(isset($_POST['new_destination'])){
    $recipient_first_name = $_POST['diff_first_name'];
    $recipient_last_name = $_POST['diff_last_name'];
    $recipient_name = $recipient_first_name . ' ' . $recipient_last_name;
    $recipient_locale = $_POST['diff_locale'];
    $optional_notes = $_POST['optional_notes'];
}

// Requiring connection Script.
require_once('db_connection.php');

$sql = "
       INSERT INTO 
        ";






// function displaySubmittedData($first_name, $last_name, $address, $extra_address_info, $locale, $format, $number, $email_address){
//     echo $first_name . ' ' . $last_name . '<br/>';
//     echo $address . ' ' . $extra_address_info . ' '. $locale . '<br/>';
//     echo $format . ' ' . $number . '<br/> '; 
//     echo 'email_address ' . $email_address;
// }

// displaySubmittedData($first_name, $last_name, $address, $extra_address_info, $locale, $format, $number, $email_address);

?>
