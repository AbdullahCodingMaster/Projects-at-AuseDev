<?php
// Include middleware functions
include_once '../includes/middleware.php';
include '../includes/navbar.php';

// Ensure the user is authenticated
redirectToLoginIfNotAuthenticated();

// Optional: Restrict access to admin users only
// restrictToAdmin();

// Retrieve user details
$userName = htmlspecialchars(getUserName() ?? "Guest");
$userRole = htmlspecialchars(getUserRole() ?? "User");
$userAvatar = htmlspecialchars(getUserAvatar());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SolutionX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .dashboard-welcome {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="dashboard-welcome text-center">
            <img src="<?php echo BASE_URL . 'assets/avatars/' . $userAvatar; ?>" alt="User Avatar" class="user-avatar mb-3">
            <h1>Welcome, <?php echo $userName; ?>!</h1>
            <p class="text-muted">Role: <?php echo $userRole; ?></p>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Recent Service Requests</h5>
                        <p class="card-text">View the status of your recent service requests.</p>
                        <a href="my_requests.php" class="btn btn-primary btn-sm">View My Requests</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Request a New Service</h5>
                        <p class="card-text">Submit a request for a new service from our company.</p>
                        <a href="request_service.php" class="btn btn-success btn-sm">Request Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>

</html>