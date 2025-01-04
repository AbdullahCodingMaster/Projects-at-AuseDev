<?php
// Include necessary files
include '../includes/header.php';
include '../includes/middleware.php'; // Include middleware for authentication and authorization checks
include '../database/db_connect.php'; // Database connection

// Fetch counts for dashboard stats
function fetchCount($query)
{
    global $pdo;
    try {
        return $pdo->query($query)->fetchColumn();
    } catch (PDOException $e) {
        // Log error to file instead of echoing it
        error_log('Error fetching data: ' . $e->getMessage());
        return 0; // Default to 0 if error occurs
    }
}

$projectCount = fetchCount("SELECT COUNT(*) FROM projects");
$userCount = fetchCount("SELECT COUNT(*) FROM users WHERE role = 'buyer'");
$requestCount = fetchCount("SELECT COUNT(*) FROM service_requests");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php include '../includes/navbar.php'; ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Admin Dashboard</h1>

        <!-- Dashboard Stats Cards -->
        <div class="row">
            <!-- Projects Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-primary rounded">
                    <div class="card-body text-center">
                        <h3 class="card-title text-primary"><?php echo htmlspecialchars($projectCount, ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="card-text">Projects</p>
                        <a href="manage_projects.php" class="btn btn-primary">Manage Projects</a>
                    </div>
                </div>
            </div>

            <!-- Users Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success rounded">
                    <div class="card-body text-center">
                        <h3 class="card-title text-success"><?php echo htmlspecialchars($userCount, ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="card-text">Users</p>
                        <a href="users.php" class="btn btn-success">Manage Users</a>
                    </div>
                </div>
            </div>

            <!-- Service Requests Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-warning rounded">
                    <div class="card-body text-center">
                        <h3 class="card-title text-warning"><?php echo htmlspecialchars($requestCount, ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="card-text">Service Requests</p>
                        <a href="service_requests.php" class="btn btn-warning">View Requests</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional Additional Stats or Data (can be uncommented for future features) -->
        <!-- <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-info rounded">
                    <div class="card-body text-center">
                        <h3 class="card-title text-info">$500,000</h3>
                        <p class="card-text">Total Revenue</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>