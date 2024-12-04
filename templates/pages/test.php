<?php include 'db.php'; ?>
<?php $row = array (
  'titre' => 'test',
  'contenu' => 'Voici un autre contenu test pour un autre article.',
  'image' => 'image2.png',
); ?>
<!DOCTYPE html>
<html>
<head>
<?php include ('../templates-pages/navbar_page.php') ?>
<div class='content'>
<title>test</title>
<link rel='stylesheet' type='text/css' href='../../css/style.css'>
</head>
<body>
<h1>test</h1>
<p>Voici un autre contenu test pour un autre article.</p>
<img src='image2.png' alt=''>
</div>
<?php include ('../templates-pages/footer_page.php')?>
</body>
</html>