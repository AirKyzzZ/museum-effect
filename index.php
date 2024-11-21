<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Accueil - Mussée d'aquitaine</title>
    <link rel="icon" href="templates/images/logo_head.png" type="image/png">

</head>
<body>
<div class="hero">
    <header>
        <?php include ("templates/template-parts/navbar.php") ?>
    </header>
    <div class="hero_content">
    <h1>Bienvenue au</br>musée d'Aquitaine</h1>
    <div class="explore">
      <p><button id="exploreBtn">EXPLORER</button> Venez <strong>visiter.</strong></p>
    </div>
    </div>
    <div class="picture">
      <img src="templates/images/ville.jpg" alt="Ville" />
    </div>
    <div class="scroll-indicator">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
            <path d="M12 18l-6-6h12l-6 6z"></path>
        </svg>
    </div>
</div>

  <script>
    document.getElementById('exploreBtn').addEventListener('click', function() {
      var nextSection = document.querySelector('.scrollable');
      nextSection.scrollIntoView({ behavior: 'smooth' });
    });
  </script>
  
<div class="scrollable">
    <center><h2>Explorez notre site</h2><center>
    <p>Nous sommes ravis de vous accueillir sur le site officiel du Musée d'Aquitaine, un lieu où l'histoire et la culture de notre région prennent vie. Explorez nos collections riches et variées, découvrez des expositions fascinantes et plongez dans le patrimoine unique de l'Aquitaine. Que vous soyez passionné d'histoire, amateur d'art ou simplement curieux, notre musée offre une expérience enrichissante pour tous. Nous vous invitons à parcourir notre site pour en savoir plus sur nos événements, nos activités et nos ressources éducatives. Bonne visite !</p>
  
  <div class="cards">
  <?php include ("templates/template-parts/cards.php") ?>
  </div><br><br>
  <div class="news">
      <?php include ("templates/template-parts/news_ticker.php")?>
  </div>


  <footer>
        <?php include ("templates/template-parts/footer.php")?>
  </footer>
</div>
</body>
</html>