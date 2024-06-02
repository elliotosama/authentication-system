<?php


$db = 'dbname';
$username = 'username';
$password = 'password';
$server = 'localhost';


$con = new mysqli($server, $username, $password, $db);

if($con->connect_error) {
  die('some thing went wrone');
}

