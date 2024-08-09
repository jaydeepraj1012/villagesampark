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

$query = "SELECT * FROM user_data";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $complaints = [];
    while ($row = $result->fetch_assoc()) {
        $complaints[] = $row;
    }
} else {
    $complaints = [];
}



$conn->close();


?>