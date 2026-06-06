<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

?>

<h2>User Profile</h2>

Username:
<?php echo $_SESSION['username']; ?>

<br><br>

Role:
<?php echo $_SESSION['role']; ?>
