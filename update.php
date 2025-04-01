<?php
session_start();
if (!isset($_SESSION['tasks']) || !isset($_GET['index'])) {
    die("Tugas tidak ditemukan!");
}

$index = $_GET['index'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $time = $_POST['time'];

    if (!empty($task) && !empty($time)) {
        $_SESSION['tasks'][$index] = ['task' => $task, 'time' => $time];
        header("Location: detail.php?index=$index");
        exit;
    }
}

$task = $_SESSION['tasks'][$index];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas</title>
</head>
<body>
    <h2>Edit Tugas</h2>
    <form method="POST">
        <input type="text" name="task" value="<?= htmlspecialchars($task['task']); ?>" required>
        <input type="number" name="time" value="<?= htmlspecialchars($task['time']); ?>" required>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="tasks.php">Batal</a>
</body>
</html>
