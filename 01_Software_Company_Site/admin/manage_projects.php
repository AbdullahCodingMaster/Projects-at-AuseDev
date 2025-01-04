<?php
include '../database/db_connect.php';
include '../includes/header.php';

// Fetch all projects from the database
$stmt = $pdo->query("SELECT * FROM projects");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include '../includes/navbar.php'; ?>


<div class="container mt-5">
    <h1>Manage Projects</h1>

    <!-- Add Project Button -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal">
        Add Project
    </button>

    <!-- Projects Table -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?php echo htmlspecialchars($project['title']); ?></td>
                    <td><?php echo htmlspecialchars($project['description']); ?></td>
                    <td>
                        <img src="../uploads/projects/<?php echo htmlspecialchars($project['image']); ?>" alt="Project Image" width="100">
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#projectModal"
                            data-id="<?php echo $project['id']; ?>"
                            data-title="<?php echo $project['title']; ?>"
                            data-description="<?php echo $project['description']; ?>"
                            data-image="<?php echo $project['image']; ?>">
                            Edit
                        </button>

                        <!-- Delete Button -->
                        <form action="project_delete.php" method="POST" style="display:inline;">
                            <input type="hidden" name="delete" value="<?php echo $project['id']; ?>">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Add/Edit Project Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="project_action.php" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="projectId">
                    <input type="hidden" name="existing_image" id="existingImage">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="projectTitle" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="projectDescription" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="projectImage" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Edit Project Modal
    const editButtons = document.querySelectorAll('.btn-warning');
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const projectId = button.getAttribute('data-id');
            const projectTitle = button.getAttribute('data-title');
            const projectDescription = button.getAttribute('data-description');
            const projectImage = button.getAttribute('data-image');

            document.getElementById('projectId').value = projectId;
            document.getElementById('projectTitle').value = projectTitle;
            document.getElementById('projectDescription').value = projectDescription;
            document.getElementById('existingImage').value = projectImage;
        });
    });
</script>

<?php include '../includes/footer.php'; ?>