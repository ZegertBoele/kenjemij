<?php
require_once('../Includes/config.php');
?>

<html>

<head>
    <title>Nieuw item || Ken je mij</title>
    <link rel="stylesheet" href="../CSS/feed_nieuw.css">
</head>

<body>
    <nav>
        <a id="nav_hm" href="#">Home</a>
        Ken Je Mij
        <a id="nav_ac" href="#">Account</a>
        <a href="#">Uitloggen</a>
    </nav>
    <div id="container">
        <h3>Voeg zelf een feit/leugen toe!</h3>
        <form action="feed_nieuw_verwerk.php" method="POST">
            <input type="text" name="titel" required placeholder="Titel..."><br>
            <input type="text" name="beschrijving" required placeholder="Beschrijving..."><br>
            <input type="radio" name="keuze" value="waar">
            <label for="male">Waar</label><br>
            <input type="radio" name="keuze" value="niet">
            <label for="female">Niet waar</label><br>
            <input type="submit" value="verzenden">
        </form>
    </div>
</body>

</html>