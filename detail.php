<?php
session_start();
if (!isset($_SESSION['tasks']) || !isset($_GET['index'])) {
    die("Tugas tidak ditemukan!");
}

$index = $_GET['index'];
$task = $_SESSION['tasks'][$index];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Tugas</title>
</head>
<body>
    <h2>Detail Tugas</h2>
    <p><strong>Nama Tugas:</strong> <?= htmlspecialchars($task['task']); ?></p>
    <p><strong>Waktu Pengerjaan:</strong> <?= htmlspecialchars($task['time']); ?> jam</p>
    <a href="tasks.php">Kembali ke Daftar</a>
</body>
</html>
