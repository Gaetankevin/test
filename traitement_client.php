<?php

require_once 'connect_to_server.php';

// Vérifier si le formulaire est soumis
if (isset($_POST['ajouter_client'])) {
    // Récupération et sécurisation des données
    $nom = $_POST['nom'];
    $contact = $_POST['contact'];


    // Requête d'insertion
    $sql = "INSERT INTO client (nom, contact) VALUES ('$nom', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Client ajouté avec succès.";
        header('location:/');
    } else {
        echo "❌ Erreur : " . $conn->error;
    }
}
