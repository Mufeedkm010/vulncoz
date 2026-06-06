<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: ../login.php");
    exit();
}

?>

<h1>Admin Portal</h1>

<p>Management Dashboard</p>

<ul>
<li><a href="tickets.php">Support Tickets</a></li>
<li><a href="users.php">Users</a></li>
<li><a href="reports.php">Reports</a></li>
</ul>
