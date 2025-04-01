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
<form method="POST">
    <input type="text" name="task" placeholder="Nama Tugas" required>
    <input type="number" name="time" placeholder="Waktu (jam)" required>
    <button type="submit">Simpan</button>
</form>
<a href="tasks.php">Lihat Tugas</a>
