<?php
// Autoriser les requêtes depuis l'extérieur (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Préparer une réponse
$response = [
    "message" => "Bienvenue sur mon API !"
];

// Retourner la réponse en JSON
echo json_encode($response);
?>
