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
<title>Dashboard</title>
</head>
<body>

<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

<p>Role: <?php echo $_SESSION['role']; ?></p>

<hr>

<ul>
<li><a href="upload.php">Upload Document</a></li>
<li><a href="documents.php">View Documents</a></li>
<li><a href="hr/">HR Portal</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="tickets.php">Support Tickets</a></li>
<li><a href="employees.php">Employee Directory</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
