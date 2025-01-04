<?php
// Include middleware for session and role-based access control
include '../includes/middleware.php';
redirectToLoginIfNotAuthenticated();
restrictToBuyer();

// Include necessary UI components
include '../includes/header.php';
include '../includes/navbar.php';
include '../database/db_connect.php';

// Get the current user ID from the session
$userId = $_SESSION['user_id'];
?>

<div class="container my-5">
    <h1 class="text-center mb-4">My Service Requests</h1>

    <!-- Table to display the service requests -->
    <div class="table-responsive shadow-sm">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service Description</th>
                    <th>Status</th>
                    <th>Requested At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    // Prepare the SQL query to fetch service requests for the logged-in user
                    $stmt = $pdo->prepare("SELECT * FROM service_requests WHERE user_id = ? ORDER BY created_at DESC");
                    $stmt->execute([$userId]);

                    // Fetch all results
                    $requests = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // Check if there are requests
                    if ($requests):
                        // Loop through each request and display in the table
                        foreach ($requests as $key => $request): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo htmlspecialchars($request['service_description']); ?></td>
                                <td><?php echo htmlspecialchars($request['status']); ?></td>
                                <td><?php echo htmlspecialchars($request['created_at']); ?></td>
                            </tr>
                        <?php endforeach;
                    else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No service requests found.</td>
                        </tr>
                <?php endif;
                } catch (Exception $e) {
                    // Error handling in case of failure to fetch data
                    echo '<tr><td colspan="4" class="text-danger">Error fetching service requests: ' . htmlspecialchars($e->getMessage()) . '</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>