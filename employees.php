<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

include 'config/db.php';

$result = mysqli_query($conn,"SELECT * FROM employees");

?>

<h1>Employee Directory</h1>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Profile</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['department']; ?></td>

<td>
<a href="viewemployee.php?id=<?php echo $row['id']; ?>">
View
</a>
</td>
</tr>

<?php
}
?>

</table>
