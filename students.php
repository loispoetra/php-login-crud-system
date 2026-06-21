<?php
session_start();
include 'connection.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$data = mysqli_query($conn,"SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

<h2>Student Management</h2>

<a href="add_student.php" class="btn btn-success mb-3">+ Add Student</a>
<a href="dashboard.php" class="btn btn-secondary mb-3">Dashboard</a>

<table class="table table-bordered table-striped bg-white shadow-sm">

<thead class="table-dark">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Major</th>
    <th>Address</th>
    <th>Action</th>
</tr>
</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($data)): ?>

<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['major'] ?></td>
    <td><?= $row['address'] ?></td>
    <td>
        <a class="btn btn-warning btn-sm" href="edit_student.php?id=<?= $row['id'] ?>">Edit</a>
        <a class="btn btn-danger btn-sm" href="delete_student.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</body>
</html>