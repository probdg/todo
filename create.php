<?php
session_start();
include 'config.php';
// $task = $_POST['task'];
$task = $_POST['task'] ?? '';
$id_user = $_SESSION['id'];

$sql = "INSERT INTO `todo`(`id`, `task`, `created_date`, `created_by`, `updated_date`, `updated_by`)
VALUES (null, '$task', NOW(), $id_user, NOW(), $id_user)";

if ($mysqli->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
session_write_close();
