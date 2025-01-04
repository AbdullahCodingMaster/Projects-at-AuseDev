<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php';
include 'database/db_connect.php';

$message = ''; // Placeholder for success or error messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $messageText = trim($_POST['message'] ?? '');

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($messageText)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
            $stmt->execute([$name, $email, $messageText]);
            $message = '<div class="alert alert-success">Thank you for contacting us! We will get back to you shortly.</div>';
        } catch (PDOException $e) {
            $message = '<div class="alert alert-danger">An error occurred. Please try again later.</div>';
        }
    } else {
        $message = '<div class="alert alert-warning">Please fill out all fields correctly.</div>';
    }
}
?>

<div class="container my-5">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">We’d love to hear from you! Get in touch with us today.</p>

    <!-- Display message -->
    <?php if ($message): ?>
        <div class="my-3">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <form action="contact.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>