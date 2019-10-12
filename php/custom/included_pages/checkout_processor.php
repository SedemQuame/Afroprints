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

// TODO: Input customer details into the database, if customer is not registered.
      // return customer if after doing so.
// TODO: Check if customer is registered
        // by checking unique fields like email address, if true return customers id.

if(isset($_POST['new_destination'])){
    $recipient_first_name = htmlspecialchars($_POST['diff_first_name']);
    $recipient_last_name = htmlspecialchars($_POST['diff_last_name']);

    $recipient_name = $recipient_first_name . ' ' . $recipient_last_name;
    $recipient_locale = htmlspecialchars($_POST['diff_locale']);
    $optional_notes = htmlspecialchars($_POST['optional_notes']);

    $recipient_address = $recipient_name . '<br/>' . $recipient_locale . '<br/>' . $optional_notes;
}

// Payment Method.
$payment_method = htmlspecialchars($_POST['payment_method']);
// TODO: Run php module for payment script here which returns a boolean value
// TODO: such that if true continue with processes otherwise, do nothing.

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
if (isset($_SESSION['user_id'])) {
  // code...
  $customer_id = $_SESSION['user_id'];
  // Get user address by concatenating field data.
  $ordering_address = $address . '<br/>' . $extra_address_info . '<br/>' . $locale;
  if ($recipient_address == "") {
    $recipient_address = $ordering_address;
  }

  $sql = "INSERT INTO
          public.purchases(  product_list, total_price, purchase_date, cust_id, ordering_address, recipient_address, payment_method)
          VALUES
          (:product_list, :product_price, :purchase_date, :customer_id, :ordering_address, :recipient_address, :payment_method);
          ";

  // print_r(array(':product_list' => $product_list,
  //              ':product_price' => $product_price,
  //              ':purchase_date' => $purchase_date,
  //              ':customer_id' => $customer_id,
  //              ':ordering_address'=>$ordering_address,
  //              ':recipient_address'=>$recipient_address,
  //              ':payment_method' => $payment_method
  //            ));

  $stmt = $pdo->prepare($sql);

  $stmt->execute(array(':product_list' => $product_list,
                       ':product_price' => intval($product_price),
                       ':purchase_date' => $purchase_date,
                       ':customer_id' => $customer_id,
                       ':ordering_address'=>$ordering_address,
                       ':recipient_address'=>$recipient_address,
                       ':payment_method' => $payment_method
                     ));

  // clear the shopping cart now.
  unset($_SESSION['cart-items']);

  // Redirect User TO Thank You Page.
  header("location: ../../../html/thank_you_page.php" );
}else {
  // TODO: IF user_id is not available, redirect user to page with message.
  // Redirecting user to sign up page, with message to sign up.
  $msg = "Please, enter your credentials to continue.";
  header("location: ../../../html/signup.php?msg=" . $msg);
}

?>
