<?php

session_start();

include 'connection.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM students WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $major = $_POST['major'];
    $address = $_POST['address'];

    mysqli_query(
        $conn,
        "UPDATE students SET
        name='$name',
        major='$major',
        address='$address'
        WHERE id='$id'"
    );

    header("Location: students.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow-sm">

<div class="card-body p-4">

<h3 class="mb-3">Edit Student</h3>

<p class="text-muted">
Update student information below
</p>

<form method="POST">

<div class="mb-3">
    <label class="form-label">Name</label>
    <input
        type="text"
        name="name"
        class="form-control"
        value="<?php echo $data['name']; ?>"
        required
    >
</div>

<div class="mb-3">
    <label class="form-label">Major</label>
    <input
        type="text"
        name="major"
        class="form-control"
        value="<?php echo $data['major']; ?>"
        required
    >
</div>

<div class="mb-3">
    <label class="form-label">Address</label>
    <textarea
        name="address"
        class="form-control"
        rows="3"
    ><?php echo $data['address']; ?></textarea>
</div>

<button class="btn btn-primary w-100" name="update">
    Update Student
</button>

</form>

<div class="text-center mt-3">
    <a href="students.php">← Back to Student List</a>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>