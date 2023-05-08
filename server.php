<?php 
$dischi_value = file_get_contents("dischi.json");
$dischi_arrey = json_decode($dischi_value, true);
$response = [
    "results" => $dischi_arrey
];
header('Content-Type: application/json');
echo json_encode($response);
