<?php
// echo "in the login script.";
$email_address = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// Including connection script.
include 'included_pages/db_connection.php';

session_start();
echo($_SESSION['user_id']);

// starting sessions.
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT cust_email, cust_password FROM customer WHERE cust_id=:customer_id";
    $stmt = $pdo->prepare($sql, array(array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)));
    $stmt->execute(array(':customer_id'=> $user_id));
    $result = $stmt->fetchAll();

    $db_email = $result[0][0];
    $db_password = $result[0][1];


    if (($email_address == $db_email) && ($password == $db_password)) {
      // Correct grant user acces to site.
      echo "<br>user authentication, successful.";
      $msg = "login, successful.";
      header('Location: ../../index.php');
    } else {
      // Redirect users, login page and display appropriate error.
      echo "<br>user authentication, failed.";
      $msg = "login, failed please try again.";
      header('Location: ../../login.php?msg='.$msg);
    }
}
else{
    $sql =  "SELECT cust_email, cust_password, cust_id FROM customer";
    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_NUM);

    $status = false;

    while ($row = $stmt->fetch()){
      if(($email_address == htmlspecialchars($row[0])) && ($password == htmlspecialchars($row[1]))){
        $status = true;
        // Correct grant user acces to site.
        if($status){
          session_start();
          $_SESSION['user_id'] = htmlspecialchars($row[2]);
          echo "<br>user authentication, successful.";
          header('Location: ../../index.php');
        }
      } else {
      // Redirect users, login page and display appropriate error.
      echo "<br>user authentication, failed.";
      $msg = "login, failed please try again.";
      header('Location: ../../login.php?msg='.$msg);
      }
}}


$pdo = null;
?>
