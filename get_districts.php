<?php
include "db.php";

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
