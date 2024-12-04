<?php include 'pages/db.php'; ?>
<?php if (isset($row)): ?>
<?php    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($row['titre']); ?></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($row['titre']); ?></h1>
    <h1>c'est page php</h1>
    <p><?php echo htmlspecialchars($row['contenu']); ?></p>
    <img src="<?php echo ($row['image']); ?>" alt="">
</body>
</html>
<?php else: ?>
    <p>No data available.</p>
<?php endif; ?>