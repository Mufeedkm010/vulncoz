<?php

include '../config/db.php';

$result = mysqli_query(
    $conn,
    "SELECT id,username,role,email FROM users"
);

$users = [];

while($row=mysqli_fetch_assoc($result))
{
    $users[] = $row;
}

header('Content-Type: application/json');

echo json_encode($users);

?>
