<?php

header("Content-Type: application/json; charset=utf-8");

$allowedOrigin = "http://127.0.0.1:8081";
$origin = $_SERVER["HTTP_ORIGIN"] ?? "";

// Autoriser Site B
if ($origin === $allowedOrigin) {
    header("Access-Control-Allow-Origin: " . $allowedOrigin);
}

// Autoriser GET et OPTIONS
header("Access-Control-Allow-Methods: GET, OPTIONS");

// Autoriser certains headers personnalisés
header("Access-Control-Allow-Headers: X-TP-Lab, Content-Type");

// Traiter la requête preflight
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(204);
    exit;
}

// Réponse normale
$data = [
    "message" => "Requête autorisée depuis Site B !",
    "server" => "Site A",
    "status" => "success"
];

echo json_encode($data);
