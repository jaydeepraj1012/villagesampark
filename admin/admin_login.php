<?php
session_start();
include "../db.php";
// Check connection
if (!$conn) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

$response = ['success' => false];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $query = "SELECT id, password FROM admin_users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die(json_encode(['success' => false, 'message' => 'Query failed: ' . mysqli_error($conn)]));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];
        $admin_id = $row['id'];

        // Check if the passwords match
        if ($password === $stored_password) {
            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['username'] = $username;
            $response['success'] = true;
        } else {
            $response['message'] = 'Invalid username or password 1stt';
        }
    } else {
        $response['message'] = 'Invalid username or password2nd';
    }

    // Close the result set and connection
    mysqli_free_result($result);
}

mysqli_close($conn);

echo json_encode($response);
?>
