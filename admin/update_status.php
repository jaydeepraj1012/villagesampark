<?php
include "../db.php";

$complaint_id = $_POST['complaint_id'];
$status = $_POST['status'];

$query = "UPDATE user_data SET status = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('si', $status, $complaint_id);

if ($stmt->execute()) {
    echo "Status updated successfully.";
} else {
    echo "Error updating status: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
