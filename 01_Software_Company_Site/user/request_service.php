<?php
// Include middleware for session and role-based access control
include '../includes/middleware.php';
redirectToLoginIfNotAuthenticated();
restrictToBuyer();

// Include necessary UI components
include '../includes/header.php';
include '../includes/navbar.php';

// Initialize variables for flash messages
$successMessage = null;
$errorMessage = null;

// Function to sanitize user input
function sanitizeInput($data)
{
    // Remove extra spaces, tabs, and newlines
    $data = trim($data);
    // Remove any HTML and PHP tags
    $data = strip_tags($data);
    // Convert special characters to HTML entities to prevent XSS attacks
    $data = htmlspecialchars($data);
    return $data;
}

// Function to display flash messages
function displayFlashMessage($type, $message)
{
    $alertType = $type === 'success' ? 'alert-success' : 'alert-danger';
    echo "<div class='alert $alertType' role='alert'>$message</div>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include database connection
    include '../database/db_connect.php';

    // Sanitize input
    $description = sanitizeInput($_POST['service_description']);
    $userId = $_SESSION['user_id'];

    try {
        // Insert the service request into the database
        $stmt = $pdo->prepare(
            "INSERT INTO service_requests (user_id, service_description, status, created_at) 
            VALUES (?, ?, 'Pending', NOW())"
        );
        $stmt->execute([$userId, $description]);

        // Set success message
        $successMessage = "Service request submitted successfully!";
    } catch (Exception $e) {
        // Set error message with exception details
        $errorMessage = "Failed to submit the service request: " . $e->getMessage();
    }
}
?>

<div class="container my-5">
    <h1 class="text-center mb-4">Request a New Service</h1>

    <!-- Flash Messages -->
    <?php if ($successMessage) displayFlashMessage('success', $successMessage); ?>
    <?php if ($errorMessage) displayFlashMessage('error', $errorMessage); ?>

    <!-- Service Request Form -->
    <form action="" method="POST" class="shadow-sm p-4">
        <div class="mb-3">
            <label for="service_description" class="form-label">Service Description</label>
            <textarea
                name="service_description"
                id="service_description"
                class="form-control"
                rows="5"
                placeholder="Describe the service you need"
                required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit Request</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>