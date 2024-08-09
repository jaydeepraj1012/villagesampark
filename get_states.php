<?php
include "db.php";

$query = "SELECT state_name , state_code FROM states";
$result = $conn->query($query);

$states = [];
while ($row = $result->fetch_assoc()) {
    $states[] = $row;
}

echo json_encode($states);

$conn->close();
?>
