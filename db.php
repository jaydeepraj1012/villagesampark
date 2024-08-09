<?php


// echo  $_SESSION['username'];
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'projectmmit';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>