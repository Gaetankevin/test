<?php
require_once 'connect_to_server.php'; // Connexion locale, pas par URL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données POST
    $libelle     = $_POST['libelle'];
    $qte         = $_POST['qte'];
    $code_barre  = $_POST['code_barre'] ?? null;
    $pu          = $_POST['pu'];
    $pv          = $_POST['pv'];
    $qte_alert   = $_POST['qte_alert'] ?? null;

    // Préparer la requête avec sécurité (évite injections SQL)
    $stmt = $conn->prepare("INSERT INTO stock (libelle, qte, code_barre, pu, pv, qte_alert) 
                            VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sisiii", $libelle, $qte, $code_barre, $pu, $pv, $qte_alert);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "✅ Produit ajouté avec succès.";
        header('Location: /'); // Redirection après succès
        exit;
    } else {
        echo "❌ Erreur lors de l'ajout du produit : " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "❌ Requête non autorisée.";
}
?>
