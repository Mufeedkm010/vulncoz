<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: ../login.php");
    exit();
}

?>

<h1>HR Portal</h1>

<ul>
<li><a href="policies.php">Company Policies</a></li>
<li><a href="leave.php">Leave Requests</a></li>
</ul>
