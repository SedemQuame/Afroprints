<?php

$db_password = "GGKL1neFeLtEr@12";
$db_username = "apsadmin";
$host_name = "localhost";
$db_name = "afriprints";

try{
  $pdo = new PDO("mysql:host=".$host_name.";dbname=".$db_name.";charset=utf8", $db_username, $db_password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $output = 'Database connection successful.';
}catch(PDOException $e){
  /* NOTE: $e isn't a string but rather an object.*/
  $error = $e->getMessage();
  $output = 'Database connection failed. \nError mEssage: '. $error;

}

echo $output;


?>
