<?php
$id = $_GET['complaint_no'];

// echo  $_SESSION['username'];
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'projectmmit';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM `user_data` Where `complaint_number`=$id";
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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
    
        <!-- /#sidebar-wrapper -->
		<h2> Complaints  Status</h2>
        <!-- Page Content -->
      
    </div>
    <div class="container">
       
        <table class="table table-responsive table-striped table-bordered">
            <thead>
                <t>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>District</th>
                    <th>State</th>
                    <th>PIN Code</th>
                    <th>Summary</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Status</th>
                   
                </t>
            </thead>
            <tbody>
                <?php if (!empty($complaints)) { ?>
                    <?php foreach ($complaints as $complaint) { ?>
                        <tr>
                            <td><?php echo $complaint['id']; ?></td>
                            <td><?php echo htmlspecialchars($complaint['name']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['dob']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['address_line']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['city']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['district']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['state']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['pin_code']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['summary']); ?></td>
                            <td><?php echo htmlspecialchars($complaint['mobile']); ?></td>
                            <td>
                                <?php if (!empty($complaint['image_path'])) { ?>
                                    <img src="<?php echo $complaint['image_path']; ?>" alt="Complaint Image" width="100">
                                    <?php } else { ?>
                                        No Image
                                        <?php } ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($complaint['status']); ?></td>
                                    
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="12">No complaints found.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>