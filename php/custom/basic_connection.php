<?php
//Step 1: Open a connection
$db = new PDO("mysql:host=localhost;dbname=salika", "", "");

$query = "SELECT * FROM users " . "ORDER BY last_name, first_name";

$result = $db->query($query);

echo "<ul>";
while ($row = $result->fetch()) {
    vprintf("<li> %s %s </li>", $row);
}
echo "</ul>";

$result->closeCursor();
$db = null;

