<?php
// echo "in the login script.";
$email_address = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// Including connection script.
include 'included_pages/db_connection.php';

// starting sessions.
if (session_start() && ($_SESSION['user_id'] != null)){
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT cust_email, cust_password FROM customer WHERE cust_id=:customer_id";
    $stmt = $pdo->prepare($sql, array(array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)));
    $stmt->execute(array(':customer_id'=> $user_id));
    $result = $stmt->fetchAll();
    // print_r($result);
    $db_email = $result[0][0];
    $db_password = $result[0][1];


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
    echo "in the else loop";

    $sql =  "SELECT cust_email, cust_password FROM customer";
    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_NUM);


    while ($row = $stmt->fetch()){
      if(($email_address == htmlspecialchars($row[0])) && ($password ==htmlspecialchars($row[1]))){
        // Correct grant user acces to site.
        echo "<br>user authentication, successful.";
        header('Location: ../../html/index.php');
      } else {
      // Redirect users, login page and display appropriate error.
      echo "<br>user authentication, failed.";
      header('Location: ../../html/login.php');
      // TODO: Attach error message to the header above.
      }
      // echo "end of else condition.";
}}


$pdo = null;
?>
