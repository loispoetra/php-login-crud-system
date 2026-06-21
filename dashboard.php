<?php

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">CRUD System</span>

        <a href="logout.php" class="btn btn-outline-light btn-sm">
            Logout
        </a>
    </div>
</nav>

<!-- MAIN CONTENT -->
<div class="container mt-5">

    <div class="row">

        <div class="col-md-12">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h2 class="mb-3">Dashboard</h2>

                    <div class="alert alert-success">
                        Welcome, <b><?php echo $name; ?></b> 👋
                    </div>

                    <p class="text-muted">
                        You are now logged into the PHP CRUD System.
                    </p>

                    <a href="students.php" class="btn btn-primary">
                        Manage Students
                    </a>

                </div>
            </div>

        </div>

    </div>

    <!-- QUICK STATS (biar keliatan pro) -->
    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Total Features</h5>
                    <h3>CRUD</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Security</h5>
                    <h3>Login System</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Status</h5>
                    <h3 class="text-success">Active</h3>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>