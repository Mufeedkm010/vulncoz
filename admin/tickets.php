<?php

include '../config/db.php';

$result = mysqli_query(
    $conn,
    "SELECT * FROM tickets ORDER BY id DESC"
);

?>

<h1>Support Tickets</h1>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<hr>

Username:
<?php echo $row['username']; ?>

<br>

Subject:
<?php echo $row['subject']; ?>

<br>

Message:
<?php echo $row['message']; ?>

<br>

<?php
}
?>
