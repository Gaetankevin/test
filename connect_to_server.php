<?php
// Informations de connexion
$host = "sql310.infinityfree.com";   // Nom d'hôte
$user = "if0_38817091";              // Nom d'utilisateur MySQL
$pass = "hr905kU8qIF2Ig6";         // Ton mot de passe MySQL (remplace les étoiles)
$db   = "if0_38817091_gest_stock_database";          // Remplace XXX par le nom exact de ta base de données

// Connexion avec mysqli
$conn = new mysqli($host, $user, $pass, $db, 3306);

// Vérification
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
?>
