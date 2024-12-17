<?php
include 'db.php';
global $pdo;

// Function to sanitize file names
function sanitizeFileName($string) {
    $string = str_replace('é', 'e', $string); // Replace é with e
    $string = str_replace("'", "-", $string); // Replace ' with -
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $string); // Replace non-alphanumeric characters with underscores
    return $string;
}

$stmt = $pdo->query('SELECT * FROM articles');
if ($stmt) {
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($articles) > 0) {
        foreach ($articles as $row) {
            $fileName = sanitizeFileName(htmlspecialchars($row['titre'], ENT_QUOTES)) . '.php';
            $filePath = __DIR__ . '/' . $fileName;

            // Create the content for the new file
            $content = "<?php include 'db.php'; ?>\n";
            $content .= "<?php \$row = " . var_export($row, true) . "; ?>\n";
            $content .= "<!DOCTYPE html>\n";
            $content .= "<html>\n<head>\n";
            $content .= "<?php include ('../templates-pages/navbar_page.php') ?>\n";
            $content .= "<div class='content'>\n";
            $content .= "<title>" . htmlspecialchars($row['titre'], ENT_QUOTES) . "</title>\n";
            $content .= "<link rel='stylesheet' type='text/css' href='../../css/style.css'>\n";
            $content .= "</head>\n<body>\n";
            $content .= "<h1>➔" . ucfirst(str_replace('-', ' ', htmlspecialchars($row['titre'], ENT_QUOTES))) . "</h1><br/>\n";
            $content .= "<p>" . htmlspecialchars($row['contenu'], ENT_QUOTES) . "</p>\n";
            $content .= "<img src='" . htmlspecialchars($row['image'], ENT_QUOTES) . "' alt=''>\n";
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