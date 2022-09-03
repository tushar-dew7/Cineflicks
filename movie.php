<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cineflicks</title>
    <link rel="stylesheet" href="style1.css" />
    <link rel="shortcut icon" type="image/x-icon" href="Logo/logo.png" />
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <div>
            <a href="logout.php" class="btn btn-rounded">Logout</a>
        </div>
        <form id="form">
            <input type="text" id="search" placeholder="Search" class="search" />
        </form>
    </header>
    <main id="main"></main>
</body>

</html>