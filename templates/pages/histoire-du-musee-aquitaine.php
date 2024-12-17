<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'histoire-du-musee-aquitaine',
  'contenu' => 'Le musée d\'Aquitaine a ouvert ses portes au public le 9 janvier 1987, mais l\'histoire de ses collections est bien plus ancienne !

Découvrez les temps forts de l\'histoire du musée, depuis le projet de Georges-Henri Rivière jusqu\'aux chantiers de rénovatio',
  'image' => 'image4.jpg',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>histoire-du-musee-aquitaine</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>➔Histoire du musee aquitaine</h1><br/>
<p>Le musée d&#039;Aquitaine a ouvert ses portes au public le 9 janvier 1987, mais l&#039;histoire de ses collections est bien plus ancienne !

Découvrez les temps forts de l&#039;histoire du musée, depuis le projet de Georges-Henri Rivière jusqu&#039;aux chantiers de rénovatio</p>
<img src='image4.jpg' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>