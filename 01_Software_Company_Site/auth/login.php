<?php
session_start();
include '../database/db_connect.php';
include '../includes/config.php'; // Include the config file for BASE_URL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate user input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Secure session handling
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];  // Correct session variable for role

            // Redirect based on role using BASE_URL
            $role = strtolower($user['role']);
            switch ($role) {
                case 'admin':
                    header("Location: " . BASE_URL . "admin/dashboard.php");
                    break;
                case 'buyer':
                    header("Location: " . BASE_URL . "user/dashboard.php");
                    break;
                default:
                    header("Location: " . BASE_URL . "index.php");
            }
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "Invalid email format.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SolutionX</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .auth-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .auth-container h1 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .error {
            color: #dc3545;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .auth-footer {
            text-align: center;
            margin-top: 1rem;
        }

        .auth-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <h1>Welcome Back!</h1>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="auth-footer">
            <p><a href="forgot_password.php">Forgot Password?</a></p>
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</body>

</html>