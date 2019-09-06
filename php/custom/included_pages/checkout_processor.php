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

// Getting selected items, from SESSIONS.
session_start();
$product_list = '{';

// processing array into a form that can be entered into the database.
for ($i=0; $i < sizeof($_SESSION['cart-items']); $i++) {
    $product_list .= "\"" . $_SESSION['cart-items'][$i] . "\",";
}

$product_list = rtrim($product_list);
$product_list = rtrim($product_list, ",");
$product_list .= '}';

$product_price = $_SESSION['total_price'];
$purchase_date = date("F j, Y, g:i a");


// Get id of customer, by making a query using his/her email or user_id stored in SESSIONS.
$customer_id = 2; //Setting customer id to #2, for trial purposes.

// Get user address by concatenating field data.
$address = $address . $extra_address_info . $locale;

$sql = "
        INSERT INTO public.purchases(
            product_list, total_price, purchase_date, cust_id, shipping_address)
            VALUES
            ('$product_list', $product_price, '$purchase_date', '$customer_id', '$address');
        ";

$pdo->exec($sql);





// function displaySubmittedData($first_name, $last_name, $address, $extra_address_info, $locale, $format, $number, $email_address){
//     echo $first_name . ' ' . $last_name . '<br/>';
//     echo $address . ' ' . $extra_address_info . ' '. $locale . '<br/>';
//     echo $format . ' ' . $number . '<br/> ';
//     echo 'email_address ' . $email_address;
// }

// displaySubmittedData($first_name, $last_name, $address, $extra_address_info, $locale, $format, $number, $email_address);



// Redirect User TO Thank You Page.
header("location: " )
?>
