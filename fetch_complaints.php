<?php
include "db.php";


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