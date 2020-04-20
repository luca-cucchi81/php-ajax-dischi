<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/style.css">
        <title>Luca's Spotify</title>
    </head>
    <body>
        <nav>
            <img id="logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.freeiconspng.com%2Fuploads%2Fgreen-app-spotify-icon-0.png&f=1&nofb=1" alt="spotify-logo">
            <h2>Luca's Spotify</h2>
        </nav>

        <main>

            <div class="container">
                <?php
                    include 'data.php';
                 ?>

                 <?php foreach ($db as $key => $album) { ?>
                     <div class="cd">
                        <img src=<?php echo $album['cover']; ?> alt="cover">
                        <h3><?php echo $album['title']; ?></h3>
                        <span><?php echo $album['artist']; ?></span>
                        <small><?php echo $album['year']; ?></small>
                    </div>
                <?php } ?>

            </div>

        </main>
    </body>
</html>
