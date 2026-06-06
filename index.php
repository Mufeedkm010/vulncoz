<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulncoz Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">

        <span class="navbar-brand">
            Vulncoz Enterprise Portal
        </span>

        <div>

            <span class="text-white me-3">
                Welcome, <?php echo $_SESSION['username']; ?>
            </span>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2>Dashboard</h2>

        <p><strong>User:</strong> <?php echo $_SESSION['username']; ?></p>

        <p><strong>Role:</strong> <?php echo $_SESSION['role']; ?></p>

        <hr>

        <div class="row">

            <div class="col-md-3">
                <a href="employees.php" class="btn btn-primary w-100">
                    Employees
                </a>
            </div>

            <div class="col-md-3">
                <a href="tickets.php" class="btn btn-success w-100">
                    Tickets
                </a>
            </div>

            <div class="col-md-3">
                <a href="documents.php" class="btn btn-info w-100">
                    Documents
                </a>
            </div>

            <div class="col-md-3">
                <a href="profile.php" class="btn btn-secondary w-100">
                    Profile
                </a>
            </div>

        </div>

    </div>

</div>

</body>
</html>
