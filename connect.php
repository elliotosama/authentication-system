<?php


$db = 'auth';
$username = 'osama';
$password = 'osamaisthebest';
$server = 'localhost';


$con = new mysqli($server, $username, $password, $db);

if($con->connect_error) {
  die('some thing went wrone');
}

