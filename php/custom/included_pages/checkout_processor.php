<?php
/*
*It will be prudent, to populate data of registered users into
the text field automatically.
// TODO: ADD country if it's an already registered user.
*/
// User name.
$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);

// Address information.
$address = htmlspecialchars($_POST['address']);
$extra_address_info = htmlspecialchars($_POST['address_extra_info']);
$locale = htmlspecialchars($_POST['locale']);

// User's Contact Information.
$format = htmlspecialchars($_POST['format']);
$number = htmlspecialchars($_POST['phone_number']);
$phone_number = $format . ' ' . $number;
$email_address = htmlspecialchars($_POST['email_address']);

$recipient_address = "";

if(isset($_POST['new_destination'])){
    $recipient_first_name = htmlspecialchars($_POST['diff_first_name']);
    $recipient_last_name = htmlspecialchars($_POST['diff_last_name']);

    $recipient_name = $recipient_first_name . ' ' . $recipient_last_name;
    $recipient_locale = htmlspecialchars($_POST['diff_locale']);
    $optional_notes = htmlspecialchars($_POST['optional_notes']);

    $recipient_address = $recipient_name . '<br/>' . $recipient_locale . '<br/>' . $optional_notes;
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
$customer_id = $_SESSION['user_id']; //Setting customer id to #2, for trial purposes.
// TODO: IF user_id is not available, redirect user to page with message.

// Get user address by concatenating field data.
$ordering_address = $address . '<br/>' . $extra_address_info . '<br/>' . $locale;
if ($recipient_address == "") {
  $recipient_address = $ordering_address;
}

$sql = "INSERT INTO
        public.purchases(  product_list, total_price, purchase_date, cust_id, ordering_address, recipient_address)
        VALUES
        (:product_list, :product_price, :purchase_date, :customer_id, :ordering_address, :recipient_address);
        ";

print_r(array(':product_list' => $product_list,
                     ':product_price' => $product_price,
                     ':purchase_date' => $purchase_date,
                     ':customer_id' => $customer_id,
                     ':ordering_address'=>$ordering_address,
                     ':recipient_address'=>$recipient_address
                   ));

$stmt = $pdo->prepare($sql);

$stmt->execute(array(':product_list' => $product_list,
                     ':product_price' => intval($product_price),
                     ':purchase_date' => $purchase_date,
                     ':customer_id' => $customer_id,
                     ':ordering_address'=>$ordering_address,
                     ':recipient_address'=>$recipient_address
                   ));

// clear the shopping cart now.
unset($_SESSION['cart-items']);

// Redirect User TO Thank You Page.
header("location: ../../../html/thank_you_page.php" );
?>
