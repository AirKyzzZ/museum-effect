<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Musée d'Aquitaine</title>
    <link rel="stylesheet" href="../../css/contact.css">

</head>
<body>
    <div class="contact-container">
        <form id="contactForm" class="contact-form" action="traitement.php" method="POST">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder=" " required>
                <label for="name">Nom</label>
                <span class="error-message">Veuillez entrer votre nom</span>
            </div>
            
            <div class="form-group">
                <input type="text" id="prenom" name="prenom" placeholder=" " required>
                <label for="prenom">Prénom</label>
                <span class="error-message">Veuillez entrer votre prénom</span>
            </div>
            
            <div class="form-group">
                <input type="number" id="age" name="age" placeholder=" " required min="1" max="120">
                <label for="age">Âge</label>
                <span class="error-message">Veuillez entrer un âge valide</span>
            </div>
            
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">Email</label>
                <span class="error-message">Veuillez entrer une adresse email valide</span>
            </div>
            
            <div class="form-group">
                <textarea id="message" name="message" placeholder=" " required></textarea>
                <label for="message">Message</label>
                <span class="error-message">Veuillez entrer votre message</span>
            </div>
            
            <button type="submit" class="submit-btn">Envoyer</button>
        </form>
    </div>

    <div class="success-message">Message envoyé avec succès!</div>

    <script src="js/contact.js"></script>
</body>
</html>