<?php
// TODO: Make object oriented.
$name = htmlspecialchars($_POST['first_name'] . " " . $_POST['last_name']);
$email_address = htmlspecialchars($_POST['email_address']);
$country = htmlspecialchars($_POST['users_country']);
$phone_number = htmlspecialchars($_POST['phone_number']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);

$table_name = "customer";

// Checking passwords match.
if ($password == $confirm_password) {
  /*PSEUDO CODE.
  *  // Check the rest of user credentials.
  * // Insert them into the database.
  */

  // Including connection script.
  include 'included_pages/db_connection.php';

  $sql = "INSERT INTO customer (cust_id, cust_name, cust_email, cust_password, cust_address, cust_contact)
          VALUES
          (nextval('customer_seq'), :name, :email_address, :password, :country, :phone_number);";

  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':name' => $name, ':email_address' => $email_address, ':password' => $password, ':country' => $country, ':phone_number'=>$phone_number));

  // Storing customer's id in the sessions.
  session_start();
  $sql2 = "SELECT cust_id FROM customer WHERE cust_email='$email_address'";
  $stmt = $pdo->query($sql2);
  $stmt->setFetchMode(PDO::FETCH_NUM);

  $result = $stmt->fetch();

  foreach ($result as $row) {
    // echo "<br>Row number is: " . $row;
    // Storing in sessions.
    $_SESSION['user_id'] = $row;
  }

  // Saving user data in Sessions for the purpose of user validation.
  $_SESSION['user_name'] = $name;
  $_SESSION['email_address'] = $email_address;
  $_SESSION['phone_number'] = $phone_number;
  $_SESSION['password'] = $password;

  // redirecting user to homepage.
  header('Location: ../../html/index.php');

  }else {
    // redirecting user to signupage with appropriate error message.
    $msg = "Passwords, provided don't match.";
    header('Location: ../../html/signup.php?msg='.$msg);
}


$pdo = null;
?>
