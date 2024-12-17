<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Card Slider</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/cards.css">

</head>

<body>
  <div class="slide-container swiper">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="templates/images/section1.png" alt="" class="card-img">
            </div>
          </div>

          
            <h2 class="name">Expositions</h2><div class="card-content">
            <button onclick="window.location.href='templates/pages/le-parcours-400-000-ans-dhistoires.php'" class="button">Le parcours 400 000 ans d'histoire</button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="templates/images/section2.png" alt="" class="card-img">
            </div>
          </div>

          
            <h2 class="name">Visites</h2><div class="card-content">

            <button onclick="window.location.href='templates/pages/Agenda.php'" class="button">Agenda</button>
            <button onclick="window.location.href='templates/pages/S-amuser-au-musee.php'" class="button">S'amuser au musée</button>
            <button onclick="window.location.href='templates/pages/Bibliotheque.php'" class="button">Bibliothèque</button>
            <button onclick="window.location.href='templates/pages/Activites-scolaires.php'" class="button">Activités scolaires</button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="templates/images/section3.png" alt="" class="card-img">
            </div>
          </div>

          
            <h2 class="name">Collections</h2><div class="card-content">

            <button onclick="window.location.href='templates/pages/les-objets-phares-du-musee.php'" class="button">Les objets phares du musée</button>
            <button onclick="window.location.href='templates/pages/acquisitions.php'" class="button">Acquisitions récentes</button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="templates/images/section4.png" alt="" class="card-img">
            </div>
          </div>

          
            <h2 class="name">Boutique</h2><div class="card-content">

            <button onclick="window.location.href='templates/pages/Idees-cadeaux.php'" class="button">Idées cadeaux</button>
            <button onclick="window.location.href='templates/pages/Tirage-Felix-Arnaudin.php'" class="button">Tirages Félix Arnaudin</button>
            <button onclick="window.location.href='templates/pages/Librairie.php'" class="button">Librairie</button>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>

</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="js/cards.js"></script>

</html>