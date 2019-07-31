<?php
echo "in the signup script.";

$name = $_POST['first_name'] . " " . $_POST['last_name'];
$email_address = $_POST['email_address'];
$country = $_POST['users_country'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$table_name = "customer";


// Checking passwords match.
if ($password == $confirm_password) {
  // code...
  // Check the rest of user credentials.
  // Insert them into the database.
  // Including connection script.
  include 'included_pages/db_connection.php';

  // SQL CODE.
  // $sql = "INSERT INTO `afriprints`.`customer` VALUES ('5', '$name', '$email_address', '$password', '', '$phone_number')";
  // $pdo->exec($sql);


  // Storing customer's id in the sessions.
  session_start();
  $sql2 = "SELECT `cust_id` FROM `afriprints`.`customer` WHERE `cust_email`='$email_address'";
  $result = $pdo->query($sql2);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo $row['cust_id'];
      }
  }else {
    echo "nothing to display.";
    // Change and place appropriate use case there.
  }


  // redirect user upon successful login.



} else {
  // code...
  // Present user with error message redirect him back signup page.
}


?>
