<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'mussée d\'aquitaine',
  'contenu' => 'Ceci est le contenu de mon premier article. Il est super bien complet et en plus je suis super fatigué aled j\'en peux mon code marche pas je vais rater ma vie en plus je suis malade je pourrai rester chez moi a jouer a elden ring par pitié',
  'image' => 'image1.jpg',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>mussée d&#039;aquitaine</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>mussée d&#039;aquitaine</h1>
<p>Ceci est le contenu de mon premier article. Il est super bien complet et en plus je suis super fatigué aled j&#039;en peux mon code marche pas je vais rater ma vie en plus je suis malade je pourrai rester chez moi a jouer a elden ring par pitié</p>
<img src='image1.jpg' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>