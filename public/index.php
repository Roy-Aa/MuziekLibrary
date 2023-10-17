<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muziek Biblioteek</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Roboto&display=swap" rel="stylesheet">
</head>
<main>
    <?php
        require_once('../source/config.php');
        require_once('data.php');
    ?>

    <header>
        <a class="headerfont headerfontp1" href="index.php">Muziek Biblioteek</a>
        <a class="headerfont" href="muziekpagina.php">Lijst #1</a>
        <a class="headerfont" href="">Lijst #2</a>
        <a class="headerfont" href="">Menu</a>
    </header>
    <section class="midpart">

    <?php foreach ($Library as $song){
        ?>

    <div class="card">
        <img src=<?php echo $song["image"]; ?> alt="">
            <h3><?php echo $song["titel"]; ?></h3>
            <h4><?php echo $song["genre"]; ?></h4>
        </div>

        <?php
    } ?>
    </section>
    <footer>
        <p class="footertext">Powered by: Roy Aardenburg</p>
    </footer>
</main>
</html>