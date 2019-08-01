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
  // Check the rest of user credentials.
  // Insert them into the database.
  // Including connection script.
  include 'included_pages/db_connection.php';

  // SQL CODE.
  $sql = "INSERT INTO `afriprints`.`customer` VALUES ('6', '$name', '$email_address', '$password', '', '$phone_number')";
  $pdo->exec($sql);

  // Storing customer's id in the sessions.
  session_start();
  $sql2 = "SELECT `cust_id` FROM `afriprints`.`customer` WHERE `cust_email`='$email_address'";
  $stmt = $pdo->query($sql2);
  $stmt->setFetchMode(PDO::FETCH_NUM);

  $result = $stmt->fetch();

  foreach ($result as $row) {
    echo "<br>Row number is: " . $row;
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
    echo "nothing to display.";
    // Change and place appropriate use case there.

    // redirecting user to signupage with appropriate error message.
    header('Location: ../../html/signup.php');
}


$pdo = null;
?>
