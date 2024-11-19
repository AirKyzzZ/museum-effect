<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = intval($_POST['age']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    $sql = "INSERT INTO utilisateurs (nom, prenom, age, email, message) 
            VALUES (:nom, :prenom, :age, :email, :message)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':age' => $age,
            ':email' => $email,
            ':message' => $message
        ]);
        echo "Données enregistrées avec succès !";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
