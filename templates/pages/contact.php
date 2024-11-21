<?php 
session_start()
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
    <header>
        <?php include ("../templates-pages/navbar_page.php") ?>
    </header>
    <div class="contact">
        <form action="traitement.php" method="POST" class="formulaire">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Nom">
            
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            
            <label for="age">Âge :</label>
            <input type="number" id="age" name="age" placeholder="Age">
            
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Email">
            
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Message"></textarea>
            
            <button type="submit">Envoyer</button>
        </form>
    </div>
    <footer>
        <?php include ("../templates-pages/footer_page.php")?>
    </footer>
</body>
</html>