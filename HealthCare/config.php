<?php
// this part of the code is used to connect to the database
$host = 'localhost';
$dbname = 'healthcare';
$username = 'root';
$password = '';

try {
  $conn2 = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 // echo "Connected to $dbname at $host successfully.";

} catch (PDOException $pe) {
  die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 ?>
