<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Musée d'Aquitaine</title>
</head>
<body>
    <form action="$_POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        <label for="name">Prenom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="age">Age :</label>
        <label for="email">Email :</label>
        <input type="number" id="age" name="age" required>
        <input type="email" id="email" name="email" required>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Envoyer</button>
        <p id="error-message"></p>
        <p id="success-message"></p>
    </form>
</body>
</html>