<?php
$host="localhost";
$user="root";
$pwd="";
$db="test";

$connection = mysqli_connect($host, $user, $pwd, $db);

if(!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


