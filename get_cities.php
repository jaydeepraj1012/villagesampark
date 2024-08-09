<?php
include "db.php";

// $district_id = $_GET['district_id'];
$district_id = "AN";
$query = "SELECT id, name FROM cities WHERE district_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $district_id);
$stmt->execute();
$result = $stmt->get_result();

$cities = [];
while ($row = $result->fetch_assoc()) {
    $cities[] = $row;
}

echo json_encode($cities);

$stmt->close();
$conn->close();
?>
