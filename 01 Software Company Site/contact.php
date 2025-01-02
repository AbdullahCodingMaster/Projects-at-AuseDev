<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">We’d love to hear from you! Get in touch with us today.</p>
    <form class="mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Your Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Your Email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>