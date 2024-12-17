<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'les-objets-phares-du-musee',
  'contenu' => 'Découvrez les oeuvres et objets phares de la collection du musée d\'Aquitaine.',
  'image' => 'image1.jpg',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>les-objets-phares-du-musee</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>➔Les objets phares du musee</h1><br/>
<p>Découvrez les oeuvres et objets phares de la collection du musée d&#039;Aquitaine.</p>
<img src='image1.jpg' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>