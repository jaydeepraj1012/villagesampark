<?php
$host = 'localhost'; // Replace with your database host
$user = 'root'; // Replace with your database username
$password = 'root'; // Replace with your database password
$dbname = 'projectmmit'; // Replace with your database name

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$state_id = $_GET['state_id'];
$query = "SELECT district_id, district_name FROM districts WHERE state_code = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $state_id);
$stmt->execute();
$result = $stmt->get_result();

$districts = [];
while ($row = $result->fetch_assoc()) {
    $districts[] = $row;
}

echo json_encode($districts);

$stmt->close();
$conn->close();
?>
