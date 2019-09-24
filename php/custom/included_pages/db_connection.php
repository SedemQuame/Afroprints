<?php
// TODO: Make script, object oriented, and add extra layer of security.
$db_password = "PGKL1neFeLtEr@1";
$db_username = "apsadmin";
$host_name = "localhost";
$db_name = "aps";

try{
  $pdo = new PDO("pgsql:host=".$host_name.";dbname=".$db_name, $db_username, $db_password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $output = 'Database connection successful.';
}catch(PDOException $e){
  /* NOTE: $e isn't a string but rather an object.*/
  $error = $e->getMessage();
  $output = 'Database connection failed. \nError mEssage: '. $error;
}

// Utility Functions

?>
