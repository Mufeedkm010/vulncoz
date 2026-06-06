<?php

$conn = mysqli_connect(
    "localhost",
    "vulnapp",
    "VulnApp@2026",
    "vulncoz"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
