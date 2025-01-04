<?php
include '../includes/header.php';
include '../includes/middleware.php'; // Restrict to admin
include '../database/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = isset($_POST['password']) && !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : null;

    // Check if we are updating or adding a new user
    if (isset($_POST['id'])) {
        // Update user
        $id = $_POST['id'];
        $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ?, role = ?" . ($password ? ", password = ?" : "") . " WHERE id = ?");
        $stmt->execute([$name, $email, $role, $password, $id]);
    } else {
        // Add new user
        $stmt = $pdo->prepare("INSERT INTO users (name, email, role, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $role, $password]);
    }
    header("Location: users.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $pdo->prepare("DELETE FROM users WHERE id = ?")->execute([$id]);
    header("Location: users.php");
    exit;
}

$users = $pdo->query("SELECT * FROM users ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
    <h1 class="text-center">Manage Users</h1>
    <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#userModal">Add User</button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo ucfirst($user['role']); ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#userModal"
                            data-id="<?php echo $user['id']; ?>"
                            data-name="<?php echo htmlspecialchars($user['name']); ?>"
                            data-email="<?php echo htmlspecialchars($user['email']); ?>"
                            data-role="<?php echo $user['role']; ?>">
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"
                            data-id="<?php echo $user['id']; ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- User Modal (Add/Edit) -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Add/Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="userId">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="userName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="userEmail" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="userRole" class="form-select" required>
                        <option value="buyer">Buyer</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="userPassword" class="form-control"
                        <?php echo !isset($user['id']) ? 'required' : ''; ?>>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete User Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="GET" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this user?
                <input type="hidden" name="delete" id="deleteUserId">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Edit User Modal
    const editButtons = document.querySelectorAll('.btn-warning');
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const userId = button.getAttribute('data-id');
            const userName = button.getAttribute('data-name');
            const userEmail = button.getAttribute('data-email');
            const userRole = button.getAttribute('data-role');

            document.getElementById('userId').value = userId;
            document.getElementById('userName').value = userName;
            document.getElementById('userEmail').value = userEmail;
            document.getElementById('userRole').value = userRole;
        });
    });

    // Delete User Modal
    const deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const userId = button.getAttribute('data-id');
            document.getElementById('deleteUserId').value = userId;
        });
    });
</script>

<?php include '../includes/footer.php'; ?>