<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MawBooks | Login</title>
        <link rel="icon" type="image/svg" href="assets/favicon.svg">
        <link rel="stylesheet" href="elements.css?v=<?php echo filemtime('elements.css'); ?>">
        <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-left">
                    <img src="assets/favicon-color.png" alt="MawBooks logo">
                    <h1>MawBooks</h1>
                </div>
                <div class="nav-right">
                    <a class="nobg-button" href="index.php">Home</a>
                    <a class="nobg-button" href="index.php">Genre</a>
                    <a class="nobg-button" href="index.php">Random</a>
                    <a class="bg-button" href="login.php">Login</a>
                </div>
            </nav>
        </header>

        <main id="top">
            <section class="quote">
                <p class="quote-text">Login to continue your reading journey.</p>
                <p class="quote-author">Access your MawBooks account</p>
            </section>
        </main>

        <footer>
            <div class="footer-left">
                <img src="assets/favicon-color.png" height="64" width="64" alt="MawBooks logo">
                <h2 style="color: #F6F3EF;">MawBooks</h2>
            </div>
            <div class="footer-right">
                <p style="color: #F6F3EF;">&copy; Copyright 2026 MawBooks. All Rights Reserved.</p>
            </div>
        </footer>

        <a href="#top" class="back-top">
            <img src="assets/favicon-color.png" alt="Back to Top">
        </a>
    </body>
</html>
