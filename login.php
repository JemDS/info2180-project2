<?php
header("Access-Control-Allow-Origin: *");

$username = $_GET['username'];
$password = $_GET['password'];
$username = htmlentities($username);
$password = htmlentities($password);

echo $username;
echo $password;

//include 'dashboard.php'
?>