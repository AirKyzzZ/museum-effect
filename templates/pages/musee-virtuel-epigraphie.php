<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'musee-virtuel-epigraphie',
  'contenu' => 'Le musée d\'Aquitaine vous présente son musée virtuel d\'épigraphie ...

[ARCHÉOLOGIE]',
  'image' => 'image4.jpg',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>musee-virtuel-epigraphie</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>➔Musee virtuel epigraphie</h1><br/>
<p>Le musée d&#039;Aquitaine vous présente son musée virtuel d&#039;épigraphie ...

[ARCHÉOLOGIE]</p>
<img src='image4.jpg' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>