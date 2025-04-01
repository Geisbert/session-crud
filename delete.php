<?php
session_start();
if (!isset($_SESSION['tasks']) || !isset($_GET['index'])) {
    die("Tugas tidak ditemukan!");
}

$index = $_GET['index'];
unset($_SESSION['tasks'][$index]);
$_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindex array

header("Location: tasks.php");
exit;
?>
