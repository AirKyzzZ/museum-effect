<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'le-parcours-400-000-ans-dhistoires',
  'contenu' => 'Grâce à la richesse et à la variété de ses collections, le musée d\'Aquitaine invite le visiteur à partir à la découverte de l\'histoire régionale, de la préhistoire à l\'époque contemporaine.',
  'image' => 'image2.jpg',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>le-parcours-400-000-ans-dhistoires</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>➔Le parcours 400 000 ans dhistoires</h1><br/>
<p>Grâce à la richesse et à la variété de ses collections, le musée d&#039;Aquitaine invite le visiteur à partir à la découverte de l&#039;histoire régionale, de la préhistoire à l&#039;époque contemporaine.</p>
<img src='image2.jpg' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>