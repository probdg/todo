<?php

session_start();

include 'config.php';
$username = @$_POST['username'];
$password = md5(@$_POST['password']);
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($username);
    $password = trim($password);
} else {
    $_SESSION["error"] = "Username and password are required";
    header("Location: login.php");
    exit();
}
$sql = 'SELECT * FROM users WHERE username= ? AND password =?';
$stmt = $mysqli->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // User found, set session variable
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["id"] = $row['id'];
        header("Location: index.php");
    } else {
        // User not found, redirect to login with error
        $_SESSION["error"] = "Invalid username or password";
        header("Location: login.php");
        exit();
    }
} else {
    // SQL error
    echo "Error: " . $mysqli->error;
}
session_write_close();
