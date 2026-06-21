<?php

include 'connection.php';

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    mysqli_query(
        $conn,
        "INSERT INTO users(name,email,password)
        VALUES('$name','$email','$password')"
    );

    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow-sm">

<div class="card-body p-4">

<h3 class="text-center mb-3">Create Account</h3>

<p class="text-center text-muted">
Start managing your data easily
</p>

<form method="POST">

<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" required>
</div>

<button class="btn btn-primary w-100" name="register">
    Create Account
</button>

</form>

<div class="text-center mt-3">
    <small>
        Already have an account?
        <a href="login.php">Login</a>
    </small>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>