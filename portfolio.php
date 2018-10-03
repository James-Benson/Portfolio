<?php
require ('admin/dbStream.php');
$stmtPortfolio = $db->query('SELECT `title`,`link`,`github`,`image`,`description` FROM `portfolio`;');
$dataPortfolio = $stmtPortfolio->fetchAll();
require('admin/dbDisplay.php');
require('outputPortfolio.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type ="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James | Portfolio</title>
</head>
<body>
    <header>
        <a href="." class="homeButton">James</a>
        <nav class="topNav">
            <a href="about.html">About</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="contact.html">Contact</a>
        </nav>
        <nav class="socialLinks">
            <a href="https://github.com/James-Benson" target="_blank"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
        </nav>
    </header>
    <main class="portfolioMain">
        <div class="mainContent">
            <?php echo outputPortfolio($dataPortfolio); ?>
        </div>
    </main>
</body>
</html>