<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

include 'config/db.php';

$result = mysqli_query(
    $conn,
    "SELECT * FROM uploads ORDER BY id DESC"
);

?>

<h2>Uploaded Documents</h2>

<table border="1">

<tr>
<th>User</th>
<th>Filename</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['filename']; ?></td>
</tr>

<?php
}
?>

</table>
