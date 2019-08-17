<?php
echo "in the login script.";

$email_address = $_POST['email'];
$password = $_POST['password'];

// Including connection script.
include 'included_pages/db_connection.php';

// starting sessions.

if (session_start() && ($_SESSION['user_id'] != null)){
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT cust_email, cust_password FROM customer WHERE cust_id='$user_id'";

    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_NUM);

    while ($row = $stmt->fetch()) {
        $db_email = $row[0];
        $db_password = $row[1];
    }

    if (($email_address == $db_email) && ($password == $db_password)) {
      // Correct grant user acces to site.
      echo "<br>user authentication, successful.";
      header('Location: ../../html/index.php');
    } else {
      // Redirect users, login page and display appropriate error.
      echo "<br>user authentication, failed.";
      header('Location: ../../html/login.php');
      // TODO: Attach error message to the header above.
    }

}
else{
    $sql =  "SELECT cust_email, cust_password FROM customer";
    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_NUM);
    while ($row = $stmt->fetch()){
      if(($email_address == $row[0]) && ($password == $row[0])){
        // Correct grant user acces to site.
        echo "<br>user authentication, successful.";
        header('Location: ../../html/index.php');

      } else {
      // Redirect users, login page and display appropriate error.
      echo "<br>user authentication, failed.";
      header('Location: ../../html/login.php');
      // TODO: Attach error message to the header above.
      }
}}


echo "end of file.";
$pdo = null;
?>
