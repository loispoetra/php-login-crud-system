<?php

session_start();

include 'connection.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM students
    WHERE id='$id'"
);

header("Location: students.php");

?>