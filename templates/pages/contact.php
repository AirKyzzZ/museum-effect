<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Musée d'Aquitaine</title>
    <link rel="stylesheet" href="../../css/contact.css">
</head>
<body>
        <?php include ("../templates-pages/navbar_page.php") ?>
    <div class="formulaire">
        <form action="traitement.php" method="POST" class="form-container">
            <h2>Contactez-nous</h2>
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Nom</label>
                <div class="line"></div>
            </div>
            
            <div class="input-group">
                <input type="text" id="prenom" name="prenom" required>
                <label for="prenom">Prénom</label>
                <div class="line"></div>
            </div>
            
            <div class="input-group">
                <input type="number" id="age" name="age" required>
                <label for="age">Âge</label>
                <div class="line"></div>
            </div>
            
            <div class="input-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
                <div class="line"></div>
            </div>
            
            <div class="input-group">
                <textarea id="message" name="message" required></textarea>
                <label for="message">Message</label>
                <div class="line"></div>
            </div>
            
            <button class="pablo" type="submit">
                <span>Envoyer</span>
                <div class="wave"></div>
            </button>
        </form>
    </div>
        <?php include ("../templates-pages/footer_page.php")?>
    <script src="../../js/contact.js"></script>
</body>
</html>