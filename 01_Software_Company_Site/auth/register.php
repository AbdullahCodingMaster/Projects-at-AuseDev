<?php
include '../database/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = trim($_POST['role']); // Get the selected user role

    // Validate user role
    if (!in_array($role, ['buyer', 'admin'])) {
        $error = "Invalid user type selected.";
    } else {
        // Check if the email already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $error = "Email is already registered. Please try logging in.";
        } else {
            // Insert the user into the database
            $stmt = $pdo->prepare("INSERT INTO users (name, email, role, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $role, $password]);
            header("Location: login.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SolutionX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        .auth-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .auth-container h1 {
            font-size: 1.8em;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            font-size: 1em;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        .form-group select {
            background-color: #fff;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
        }

        .auth-footer p {
            font-size: 1em;
        }

        .auth-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .error {
            color: red;
            font-size: 1em;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <h1>Create Your Account</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="role">User Type</label>
                <select name="role" id="role" required>
                    <option value="buyer">Buyer</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <div class="auth-footer">
            <p>Already have an account? <a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>

</html>