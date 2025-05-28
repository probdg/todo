<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$mysqli = new mysqli("localhost", "root", "password", "todolist");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
