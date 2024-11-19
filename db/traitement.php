<?php
// Inclure la connexion à la base de données
require 'db.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données en toute sécurité
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = intval($_POST['dte_naissance']);
    $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO utilisateurs (nom, prenom, dte_naissance, mail, message) 
            VALUES (:nom, :prenom, :age, :email, :message)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':dte_naissance' => $age,
            ':mail' => $email,
            ':message' => $message
        ]);
        echo "Données enregistrées avec succès !";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
