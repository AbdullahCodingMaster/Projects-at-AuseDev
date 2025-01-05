<?php include 'includes/header.php'; ?>
<?php include 'database/db_connect.php';

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

<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Enhanced Slider -->
<section class="hero-section text-white text-center" style="min-height: 100vh; width: 100%; position: relative;">
    <div class="container-fluid px-0">
        <div id="contactHeroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/images/contact-hero-1.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">Get in Touch</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">We’re here to answer your questions and help you get started!</p>
                            <a href="#contact-form" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/images/contact-hero-2.jpg'); background-size: cover; background-position: center; height: 100vh;">
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0;"></div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-container position-relative">
                            <h1 class="display-4 fw-bold mb-3 fadeInUp">We’re Here to Help</h1>
                            <p class="lead mb-4 fadeInUp delay-1s">Reach out anytime, and we’ll be happy to assist you.</p>
                            <a href="#contact-form" class="btn btn-primary btn-lg px-4 py-2 fadeInUp delay-2s">Reach Out Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#contactHeroSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#contactHeroSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<!-- SolutionX Information Section -->
<section class="info-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="assets/images/solutionx-team.jpg" alt="SolutionX Team" class="img-fluid rounded shadow">
            </div>
            <!-- Text Content Section -->
            <div class="col-md-6">
                <h2 class="fw-bold">Do you have some questions?</h2>
                <p>At SolutionX, we are committed to delivering cutting-edge software solutions and are always eager to connect with talented professionals in the tech industry.</p>
                <ul class="list-unstyled mt-4">
                    <li><strong>Address:</strong> Chellah Bandi, Muzaffarabad, Azad Jammu & Kashmir, Pakistan</li>
                    <li><strong>Phone:</strong> +92 345 678 9012</li>
                    <li><strong>Email:</strong> <a href="mailto:info@solutionx.com" class="text-decoration-none">info@solutionx.com</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<div class="container my-5">
    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6">
            <h2 class="mb-4">Contact Us</h2>
            <?php if ($message): ?>
                <div class="my-3">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            <form action="contact.php" method="POST">
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

        <!-- Google Map -->
        <div class="col-md-6">
            <h2 class="mb-4">Our Location</h2>
            <div class="ratio ratio-4x3">
                <iframe
                    loading="lazy"
                    src="https://maps.google.com/maps?q=Chellah%20bandi%20muzaffaraabad%20ajk%20Pakistan&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
                    title="Our Location"
                    aria-label="Chellah bandi muzaffaraabad ajk Pakistan"></iframe>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>