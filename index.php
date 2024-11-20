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
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod viverra nisi, et consectetur nisi pellentesque a. Sed euismod viverra nisi, et consectetur nisi pellentesque a. Sed euismod viverra nisi, et consectetur nisi pellentesque a.</p>
    <p><a href="templates/pages/contact.php">Contact Us</a></p>
  
  <div class="cards">
  <?php include ("templates/template-parts/cards.php") ?>
  </div>
  <div class="news">
      <?php include ("templates/template-parts/news_ticker.php")?>
  </div>
</div>
</body>
</html>