<?php
echo "in the login script.";

$email_address = $_POST['email'];
$password = $_POST['password'];

// Including connection script.
include 'included_pages/db_connection.php';


// SQL CODE.
$sql = "";

// Compare user credentials to those stored in the database.

?>
