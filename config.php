<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'shop_db';
$port = 3307; // replace with your MySQL port if different

$conn = mysqli_connect($host, $user, $password, $database, $port) 
    or die('Connection failed: ' . mysqli_connect_error());

?>
