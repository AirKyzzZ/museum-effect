<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'Bienvenue-dans-la-boutique',
  'contenu' => 'La boutique du musée propose un large choix d\'ouvrages, catalogues d\'expositions, affiches, cartes postales et cadeaux pour les grands et les petits. 
La librairie Idées cadeaux Offrez un tirage photographique Félix Arnaudin. 
Musée ouvert du mardi au d',
  'image' => 'images/Boutique-Bienvenue.jpg',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>Bienvenue-dans-la-boutique</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>➔Bienvenue dans la boutique</h1><br/>
<p>La boutique du musée propose un large choix d&#039;ouvrages, catalogues d&#039;expositions, affiches, cartes postales et cadeaux pour les grands et les petits. 
La librairie Idées cadeaux Offrez un tirage photographique Félix Arnaudin. 
Musée ouvert du mardi au d</p>
<img src='images/Boutique-Bienvenue.jpg' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>