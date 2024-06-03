<?php
$host = "sql300.infinityfree.com";
$dbname = "if0_36414158_signup";
$username = "if0_36414158";
$password = "AHVAXQhWiZE";

$mysqli = new mysqli(hostname: $host, username: $username, password: $password, database: $dbname);

if($mysqli->connect_errno)
{
  die("Connection Error: " . $mysqli->connect_errno);
}

return $mysqli;
?>