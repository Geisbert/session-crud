<?php
session_start();
if (!isset($_SESSION['tasks']) || !isset($_GET['index'])) {
    die("Tugas tidak ditemukan!");
}

$index = $_GET['index'];
$task = $_SESSION['tasks'][$index];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Detail Tugas</h2>
        <p><strong>Nama Tugas:</strong> <?= htmlspecialchars($task['task']); ?></p>
        <p><strong>Waktu Pengerjaan:</strong> <?= htmlspecialchars($task['time']); ?> jam</p>
        <a href="tasks.php">Kembali ke Daftar</a>
    </div>
</body>
</html>
