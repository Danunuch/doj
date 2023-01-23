<?php
$servername = "localhost";
$username = "dojindustr18_db";
$password = "fXUXY30egm";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dojindustr18_db;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
