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

// Requiring connection Script.
require_once('db_connection.php');

// Getting selected items, from SESSIONS.
session_start();

if(!isset($_SESSION['cart-items'])){
  $msg = "Cannot find items, in the shopping cart.";
  header("location: ../../../cart.php?msg=" . $msg);
}

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


// Payment Method.
$payment_method = htmlspecialchars($_POST['payment_method']);
// TODO: Run php module for payment script here which returns a boolean value
// TODO: such that if true continue with processes otherwise, do nothing.


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

  $stmt = $pdo->prepare($sql);

  $stmt->execute(array(':product_list' => $product_list,
                       ':product_price' => intval($product_price),
                       ':purchase_date' => $purchase_date,
                       ':customer_id' => $customer_id,
                       ':ordering_address'=>$ordering_address,
                       ':recipient_address'=>$recipient_address,
                       ':payment_method' => $payment_method
                     ));


if($payment_method == 'credit_card'){

}else if($payment_method == 'mobile_money'){
  $momo_number = htmlspecialchars($_POST['momo_phone_number']);
  $network = (htmlspecialchars($_POST['momo_network']));
  $amount = 1.00;
  payviamobilemoneygh($amount, $momo_number, $first_name, $last_name, $network, $email_address, getUserIpAddr());
}else if($payment_method == 'cyrto_currency'){
  
}else{
  // return error message.
  echo 'can\'t recognise payment method.';
}
  

  // clear the shopping cart now.
  unset($_SESSION['cart-items']);
  

  
  $msg = "Payment successful.";
  // Redirect User TO Thank You Page.
  // header("location: ../../../thank_you_page.php?msg=$msg");
}else {
  // TODO: IF user_id is not available, redirect user to page with message.
  // Redirecting user to sign up page, with message to sign up.
  $msg = "Please, enter your credentials to continue.";
  header("location: ../../../signup.php?msg=" . $msg);
}

function getKey($seckey){
  $hashedkey = md5($seckey);
  $hashedkeylast12 = substr($hashedkey, -12);

  $seckeyadjusted = str_replace("FLWSECK-", "", $seckey);
  $seckeyadjustedfirst12 = substr($seckeyadjusted, 0, 12);

  $encryptionkey = $seckeyadjustedfirst12.$hashedkeylast12;
  return $encryptionkey;

}

function encrypt3Des($data, $key)
 {
  $encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
        return base64_encode($encData);
 }

 function payviamobilemoneygh($amount, $number, $firstname, $lastname, $network, $email, $ip){ // set up a function to test card payment.
    
  error_reporting(E_ALL);
  ini_set('display_errors',1);
  
  $data = array('PBFPubKey' => 'FLWPUBK-6509a295095f64d642e5eeeaaec1f07a-X',
  'currency' => 'GHS',
  'country' => 'GH',
  'payment_type' => 'mobilemoneygh',
  'amount' => $amount,
  'phonenumber' => $number,
  'firstname' => $firstname,
  'lastname' => $lastname,
  'network' => $network,
  'email' => $email,
  'IP' => $ip,
  'txRef' => 'MXX-ASC-4578',
  'orderRef' => 'MXX-ASC-90929',
  'is_mobile_money_gh' => 1,
  'device_fingerprint' => '');
  
  $SecKey = 'FLWSECK-84618a5e3cfba10479e7960aa58679cf-X';
  
  $key = getKey($SecKey); 
  
  $dataReq = json_encode($data);
  
  $post_enc = encrypt3Des( $dataReq, $key );

  var_dump($dataReq);
  
  $postdata = array(
   'PBFPubKey' => 'FLWPUBK-6509a295095f64d642e5eeeaaec1f07a-X',
   'client' => $post_enc,
   'alg' => '3DES-24');
  
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "https://api.ravepay.co/flwv3-pug/getpaidx/api/charge");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata)); //Post Fields
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
  curl_setopt($ch, CURLOPT_TIMEOUT, 200);
  
  
  $headers = array('Content-Type: application/json');
  
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  $request = curl_exec($ch);
  
  if ($request) {
      $result = json_decode($request, true);
      echo "<pre>";
      print_r($result);
  }else{
      if(curl_error($ch))
      {
          echo 'error:' . curl_error($ch);
      }
  }
  
  curl_close($ch);
}

function getUserIpAddr(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      //ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      //ip pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
?>
