<?php
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
</head>
<body>
    <h2>Daftar Tugas</h2>
    <ol>
        <?php foreach ($_SESSION['tasks'] as $index => $task) : ?>
            <li>
                <a href="detail.php?index=<?= $index; ?>"><?= htmlspecialchars($task['task']); ?></a>
                - <a href="update.php?index=<?= $index; ?>">Edit</a> | 
                  <a href="delete.php?index=<?= $index; ?>" onclick="return confirm('Hapus tugas ini?');">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ol>
    <a href="index.php">Tambah Tugas</a>
</body>
</html>
