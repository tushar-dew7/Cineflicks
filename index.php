<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: movie.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="Logo/logo.png" />
    <title>Cineflicks</title>
</head>
<body>
    <header class="showcase">
        <div class="showcase-top">
            <img src="Logo/logo1.png" alt="Cineflicks Logo">
            <a href="signup.php" class="btn btn-rounded">Sign In</a>
        </div>
        <div class="showcase-content">
            <h1>Unlimited movies, TV shows and more.</h1>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <input type="email" name="email" id="mail" placeholder="Email address">
            <a href="#" class="btn btn-lg">GET STARTED ></a>
        </div>
    </header>

    <section class="style-cards">
        <div class="card-0">
            <img src="Img/pic1.jpg" alt="Cineflicks Mobile">
            <div class="desc-0">
                <h1>Protection for kids.</h1>
                <h3>Provide parents with advance information about the content of movies to help them determine what movies are appropriate for their children at any age.</h3>
            </div>
        </div>
        <div class="card-1">
            <div class="desc-1">
                <h1>Save your time.</h1>
                <h3>It's easier than ever to know whether or not a movie is worth watching.</h3>
            </div>
            <img src="Img/pic2.jpg" alt="Cineflicks TV">
        </div>
        <div class="card-2">
            <img src="Img/pic3.jpg" alt="Cineflicks Mobile">
            <div class="desc-2">
                <h1>Personal Taste Still Matters Most.</h1>
                <h3>Save your favourites easily and always have something to watch.</h3>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Questions? Call 000-800-040-1843</p>
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Centre</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Watch for Free</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Ways to Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Centre</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Cineflicks Originals</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>