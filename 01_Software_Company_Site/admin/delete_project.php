<?php include '../includes/db_connect.php'; ?>

<?php
$projectId = $_GET['id'] ?? null;

if ($projectId) {
    $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
    $stmt->execute([$projectId]);
}

header("Location: projects.php");
exit;
?>
