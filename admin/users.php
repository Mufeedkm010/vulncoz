<?php

session_start();

include '../config/db.php';

$result = mysqli_query($conn,"SELECT * FROM users");

?>

<h1>System Users</h1>

<table border="1">

<tr>
<th>ID</th>
<th>Username</th>
<th>Role</th>
<th>Email</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['role']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>

<?php
}
?>

</table>
