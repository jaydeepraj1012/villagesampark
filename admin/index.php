<?php

session_start();
if (isset($_SESSION['username'])){


    include "../db.php";

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

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/admin/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                       
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Simple Admin Panel</h1>
              
            </div>
        </div>
     
    </div>
    <div class="container">
        <h2>All Complaints</h2>
        <table class="table table-responsive table-striped table-bordered">
            <thead>
                <tr>
                    <th>complaint_number</th>
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
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($complaints)) { ?>
                    <?php foreach ($complaints as $complaint) { ?>
                        <tr>
                            <td><?php echo $complaint['complaint_number']; ?></td>
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
                                    <img src="../<?php echo $complaint['image_path']; ?>" alt="Complaint Image" width="100">
                                    <?php } else { ?>
                                        No Image
                                        <?php } ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($complaint['status']); ?></td>
                                    <td><select class="status-select" data-id="<?php echo $complaint['id']; ?>">
                                    <option value="active" <?php echo $complaint['status'] == 'active' ? 'selected' : ''; ?>>Active</option>
                                    <option value="resolved" <?php echo $complaint['status'] == 'resolved' ? 'selected' : ''; ?>>Resolved</option>
                                    <option value="closed" <?php echo $complaint['status'] == 'closed' ? 'selected' : ''; ?>>Reject</option>
                                </select></td>
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



<?php }else{
    header("Location: ../index.php");
};
?>