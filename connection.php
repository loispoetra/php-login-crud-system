<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_crud_system"
);

if (!$conn) {
    die("Database connection failed.");
}
?>