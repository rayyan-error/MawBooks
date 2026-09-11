<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $gender = $_POST["gender"];

    $data = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "gender" => $gender
    ];

    file_put_contents(
        "../json/login.json",
        json_encode($data, JSON_PRETTY_PRINT)
    );

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MawBooks | Login</title>
        <link rel="icon" type="image/svg" href="../assets/favicon.svg">
        <link 
            rel="stylesheet" 
            href="../css/elements.css?v=<?php echo filemtime('../css/elements.css'); ?>"
        />
        <link 
            rel="stylesheet" 
            href="../css/styles.css?v=<?php echo filemtime('../css/styles.css'); ?>"
        />
        <link
            rel="stylesheet"
            href="../css/form.css?v=<?php echo filemtime('../css/form.css'); ?>"
        />
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-left">
                    <img src="../assets/favicon-color.png" alt="MawBooks logo">
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
            <div class="subhead">
                <section class="quote">
                    <p class="quote-text">Login to continue your reading journey.</p>
                    <p class="quote-author">Access your MawBooks account</p>
                </section>
            </div>

            <div class="login-form">
                <div class="form-content">
                    <h1>Login</h1>
                    <form action="#" method="post" novalidate>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" autocomplete="name">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="email">

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">

                        <fieldset>
                            <legend>Gender</legend>
                            <label>
                                <input type="radio" name="gender" value="male">
                                Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female">
                                Female
                            </label>
                        </fieldset>

                        <button class="bg-button" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </main>

        <br><br><br>

        <footer>
            <div class="footer-left">
                <img src="../assets/favicon-color.png" height="64" width="64" alt="MawBooks logo">
                <h2 style="color: #F6F3EF;">MawBooks</h2>
            </div>
            <div class="footer-right">
                <p style="color: #F6F3EF;">&copy; Copyright 2026 MawBooks. All Rights Reserved.</p>
            </div>
        </footer>

        <a href="#top" class="back-top">
            <img src="../assets/favicon-color.png" alt="Back to Top">
        </a>

        <script>
            document.querySelector(".form-content form").addEventListener("submit", function (event) {
                const name = document.getElementById("name");
                const email = document.getElementById("email");
                const password = document.getElementById("password");
                const gender = document.querySelector("input[name='gender']:checked");
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (name.value.trim() === "") {
                    event.preventDefault();
                    alert("Please enter your name.");
                    name.focus();
                } else if (!emailPattern.test(email.value.trim())) {
                    event.preventDefault();
                    alert("Please enter a valid email address.");
                    email.focus();
                } else if (password.value.length < 6) {
                    event.preventDefault();
                    alert("Password must be at least 6 characters long.");
                    password.focus();
                } else if (!gender) {
                    event.preventDefault();
                    alert("Please select male or female.");
                }
            });
        </script>
    </body>
</html>
