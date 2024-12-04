<?php
include 'db.php';
global $pdo;

// Function to sanitize file names
function sanitizeFileName($string) {
    return preg_replace('/[^A-Za-z0-9\-]/', '_', $string);
}

$stmt = $pdo->query('SELECT * FROM articles');
if ($stmt) {
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($articles) > 0) {
        foreach ($articles as $row) {
            $fileName = sanitizeFileName($row['titre']) . '.php';
            $filePath = __DIR__ . '/' . $fileName;

            // Create the content for the new file
            $content = "<?php include 'db.php'; ?>\n";
            $content .= "<?php \$row = " . var_export($row, true) . "; ?>\n";
            $content .= "<!DOCTYPE html>\n";
            $content .= "<html>\n<head>\n";
            $content .= "<?php include ('../templates-pages/navbar_page.php') ?>\n";
            $content .= "<div class='content'>\n";
            $content .= "<title>" . htmlspecialchars($row['titre']) . "</title>\n";
            $content .= "<link rel='stylesheet' type='text/css' href='../../css/style.css'>\n";
            $content .= "</head>\n<body>\n";
            $content .= "<h1>" . htmlspecialchars($row['titre']) . "</h1>\n";
            $content .= "<p>" . htmlspecialchars($row['contenu']) . "</p>\n";
            $content .= "<img src='" . htmlspecialchars($row['image']) . "' alt=''>\n";
            $content .= "</div>\n";
            $content .= "<?php include ('../templates-pages/footer_page.php')?>\n";
            $content .= "</body>\n</html>";

            // Write the content to the new file
            file_put_contents($filePath, $content);
        }
        echo 'Pages created successfully!';
    } else {
        echo 'No articles found in the database.';
    }
} else {
    echo 'Error fetching articles.';
}
?>