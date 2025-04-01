<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $time = $_POST['time'];
    $_SESSION['tasks'][] = ['task' => $task, 'time' => $time];
    header("Location: tasks.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Tugas</h1>
        <form method="POST">
            <input type="text" name="task" placeholder="Nama Tugas" required>
            <input type="number" name="time" placeholder="Waktu (jam)" required>
            <button type="submit">Simpan</button>
        </form>
        <a href="tasks.php">Lihat Tugas</a>
    </div>
</body>
</html>
