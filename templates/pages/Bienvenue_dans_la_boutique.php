<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'Bienvenue dans la boutique',
  'contenu' => 'La boutique du musée propose un large choix d\'ouvrages, catalogues d\'expositions, affiches, cartes postales et cadeaux pour les grands et les petits.',
  'image' => '',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>Bienvenue dans la boutique</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>➔Bienvenue dans la boutique</h1><br/>
<p>La boutique du musée propose un large choix d&#039;ouvrages, catalogues d&#039;expositions, affiches, cartes postales et cadeaux pour les grands et les petits.</p>
<img src='' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>