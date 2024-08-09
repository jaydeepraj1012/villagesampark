<?php
$host = 'localhost'; // Replace with your database host
$user = 'root'; // Replace with your database username
$password = 'root'; // Replace with your database password
$dbname = 'projectmmit'; // Replace with your database name

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function generateUniqueComplaintNumber($conn) {
    do {
        $complaintNumber = mt_rand(1000000000, 9999999999);
        $stmt = $conn->prepare("SELECT COUNT(*) FROM user_data WHERE complaint_number = ?");
        $stmt->bind_param("s", $complaintNumber);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
    } while ($count > 0);
    return $complaintNumber;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $addressLine = $_POST['addressLine'] ?? '';
    $city = $_POST['city'] ?? '';
    $district = $_POST['district'] ?? '';
    $state = $_POST['state'] ?? '';
    $email = $_POST['email'] ?? '';
    $pinCode = $_POST['pinCode'] ?? '';
    $summary = $_POST['summary'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $image = $_FILES['image'] ?? null;
    $imagePath = ''; // Initialize the image path

    // Handle file upload
    if ($image && $image['error'] == 0) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Ensure the upload directory exists
        }
        $uploadFile = $uploadDir . basename($image['name']);
        if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
            $imagePath = $uploadFile;
        } else {
            echo "Failed to upload image.";
            exit;
        }
    } else {
        echo "Image file error or not provided.";
        exit;
    }

    // Generate a unique 10-digit complaint number
    $complaintNumber = generateUniqueComplaintNumber($conn);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO user_data (complaint_number, name, dob, address_line, city, district, state, email, pin_code, summary, mobile, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ssssssssssss", $complaintNumber, $name, $dob, $addressLine, $city, $district, $state, $email, $pinCode, $summary, $mobile, $imagePath);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Complaint successfully registered with complaint number: $complaintNumber";
        echo ` <script> alert("nbfdhsf");</script>  `;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
