<?php
    $url = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'trial';
    $conn = mysqli_connect($url, $username, $password, $database);
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
?>