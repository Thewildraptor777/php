<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Music Player</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/fb27aa5521.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id="playlist-section">
        <h4>playlist selection</h4>
        <p id="playlists-p">
            <?php require 'php/playlists.php' ?></p>
    </section>
    <section id="playlist-songs">
        <h1 class="tracks-header">
        </h1>
        <p class="tracks-header" id="total-songs">total number of songs:
        </p>
        <div id="playlist-container">
            <ol id="playlist-tracks"><?php require 'php/tracks.php' ?></ol>

        </div>
    </section>
    <section id="music-section">
        <audio id="audio">
            <source src="<?php echo $_GET["current"] ?>" type="audio/mpeg">
        </audio>
        <div id="music-info">
            <p class="music-p">Title:
            </p>

            <p class="music-p"> Length:</p>


            <p class="music-p"> Artist: </p>


            <p class="music-p"> Playlist:</p>
        </div>
        <div>
            <section id="controls-section">
                <section id="main-button">
                    <div id="play-button-div">
                        <button id="play-button" class="buttons"><i class='fa-solid fa-play'></i></button>
                    </div>
                    <div class="clear" id="pause-button-div">
                        <button id="pause-button" class="buttons"><i class="fa-solid fa-pause"></i></button>
                    </div>
                </section>
                <div class="spacer">
                    <button id="shuffle-button" class="buttons"><i id="shuffle-icon" class="fa-solid fa-shuffle"></i></button>
                </div>
            </section>
        </div>
    </section>


</body>
<script src="script.js"></script>


</html>