<?php
if(isset($_POST['username'],$_POST['password'])) {
    require_once 'connection.php';
    include "cors.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, password) VALUES ('$username', '$password')";
    if(mysqli_query($connection, $sql)) {
        echo "User added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
} else {
    echo "Invalid request";
}