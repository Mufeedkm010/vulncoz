<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

include 'config/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM employees WHERE id='$id'";

$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);

?>

<h2>Employee Details</h2>

Name:
<?php echo $data['fullname']; ?>

<br><br>

Department:
<?php echo $data['department']; ?>

<br><br>

Email:
<?php echo $data['email']; ?>

<br><br>

Salary:
<?php echo $data['salary']; ?>
