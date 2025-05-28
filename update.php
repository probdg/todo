<?php
session_start();
include 'config.php';

$task = $_POST['task'] ?? '';
$id_user = $_SESSION['id'];
$todo_id = $_POST['id'] ?? '';

if ($todo_id && $task) {
    $stmt = $mysqli->prepare("UPDATE `todo` SET `task` = ?, `updated_date` = NOW(), `updated_by` = ? WHERE `id` = ?");
    $stmt->bind_param("sii", $task, $id_user, $todo_id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Invalid input.";
}

$mysqli->close();
session_write_close();
