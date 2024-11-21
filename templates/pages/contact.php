<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Musée d'Aquitaine</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div class="contact">
        <form action="traitement.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="age">Âge :</label>
            <input type="number" id="age" name="age" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>