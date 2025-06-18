<?php
// api.php

header('Content-Type: application/json');

$response = [
    "status" => "success",
    "message" => "Data diterima dari Python!"
];

echo json_encode($response);
?>
