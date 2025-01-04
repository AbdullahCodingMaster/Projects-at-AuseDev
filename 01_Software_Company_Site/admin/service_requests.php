<?php
include '../includes/header.php';
include '../includes/middleware.php'; // Restrict to admin
include '../database/db_connect.php';

try {
    // Fetch all service requests along with user names
    $requests = $pdo->query("
        SELECT sr.id, sr.service_description, sr.status, u.name AS user_name 
        FROM service_requests sr 
        JOIN users u ON sr.user_id = u.id 
        ORDER BY sr.id DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle database errors and display user-friendly messages
    die("Error fetching service requests: " . htmlspecialchars($e->getMessage()));
}

// Handle status update actions
if (isset($_GET['action'], $_GET['id'])) {
    $action = $_GET['action'];
    $id = (int)$_GET['id'];  // Ensure ID is an integer

    if (!in_array($action, ['approve', 'reject'], true)) {
        // Invalid action, redirect to prevent unwanted behavior
        header("Location: service_requests.php");
        exit;
    }

    // Set the status based on the action
    $status = ($action === 'approve') ? 'approved' : 'rejected';

    try {
        $stmt = $pdo->prepare("UPDATE service_requests SET status = ? WHERE id = ?");
        $stmt->execute([$status, $id]);

        // Redirect to refresh the page and prevent re-execution of the action
        header("Location: service_requests.php");
        exit;
    } catch (PDOException $e) {
        // Handle database errors and display user-friendly messages
        die("Error updating service request: " . htmlspecialchars($e->getMessage()));
    }
}
?>

<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
    <h1 class="text-center">Service Requests</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Service Description</th>
                <th>User</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($requests)): ?>
                <?php foreach ($requests as $request): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($request['service_description']); ?></td>
                        <td><?php echo htmlspecialchars($request['user_name']); ?></td>
                        <td><?php echo ucfirst(htmlspecialchars($request['status'])); ?></td>
                        <td>
                            <?php if ($request['status'] === 'pending'): ?>
                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirmModal" data-action="approve" data-id="<?php echo $request['id']; ?>">Approve</a>
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmModal" data-action="reject" data-id="<?php echo $request['id']; ?>">Reject</a>
                            <?php else: ?>
                                <span class="text-muted">No actions available</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No service requests found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to proceed with this action?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmAction" class="btn btn-danger">Yes, Proceed</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

<script>
    // JavaScript to dynamically set the action URL based on the button clicked
    const confirmModal = document.getElementById('confirmModal');
    confirmModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const action = button.getAttribute('data-action'); // Action to perform (approve or reject)
        const id = button.getAttribute('data-id'); // The service request ID

        const confirmAction = document.getElementById('confirmAction');
        confirmAction.setAttribute('href', `?action=${action}&id=${id}`);
    });
</script>