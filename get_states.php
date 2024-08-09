<?php
$host = 'localhost'; // Replace with your database host
$user = 'root'; // Replace with your database username
$password = 'root'; // Replace with your database password
$dbname = 'projectmmit'; // Replace with your database name

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT state_name , state_code FROM states";
$result = $conn->query($query);

$states = [];
while ($row = $result->fetch_assoc()) {
    $states[] = $row;
}

echo json_encode($states);

$conn->close();
?>
