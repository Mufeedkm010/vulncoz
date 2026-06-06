<?php

$status = [
    "server" => "online",
    "database" => "connected",
    "environment" => "production"
];

header('Content-Type: application/json');

echo json_encode($status);

?>
