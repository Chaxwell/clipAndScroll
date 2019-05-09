<?php

include "config/connexion-bdd.php";

/*
..######...#######..##......
.##....##.##.....##.##......
.##.......##.....##.##......
..######..##.....##.##......
.......##.##..##.##.##......
.##....##.##....##..##......
..######...#####.##.########
*/
$req = $bdd->prepare("SELECT * FROM playlists WHERE userId = ? ");

$reqplaylist = $bdd->prepare("SELECT DISTINCT playlistName FROM playlists WHERE userId = ?  ");


$reqplaylist->execute(array($_SESSION["userId"]));

$playlistsName = $reqplaylist->fetchAll();

$req->execute(array($_SESSION["userId"]));

$playlists = $req->fetchAll();


?>
<div class="playlist">

    <?php
    /*
    .########..##..........###....##....##.##.......####..######..########
    .##.....##.##.........##.##....##..##..##........##..##....##....##...
    .##.....##.##........##...##....####...##........##..##..........##...
    .########..##.......##.....##....##....##........##...######.....##...
    .##........##.......#########....##....##........##........##....##...
    .##........##.......##.....##....##....##........##..##....##....##...
    .##........########.##.....##....##....########.####..######.....##...
    */

    foreach ($playlistsName as $playlistName) {
        $rep = $bdd->prepare("SELECT * FROM playlists WHERE playlistName = ?");

        $rep->execute(array($playlistName["playlistName"]));

        $nameVideoPlaylists = $rep->fetchAll();

       

        $namePlay =  $playlistName["playlistName"];

        echo '<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
   ' . $playlistName["playlistName"] . '
  </button>';

        foreach ($playlists as $playlist) {
         
            echo '<div class="dropdown-menu "  aria-labelledby="dropdownMenu2" >';
            foreach ($nameVideoPlaylists as $nameVideoPlaylist) {
               
                $repvideo = $bdd->prepare("SELECT * FROM videos WHERE id = ?");

                $repvideo->execute(array($nameVideoPlaylist["videoId"]));

                $videoPlaylists = $repvideo->fetchAll();

                foreach ($videoPlaylists as $videoPlaylist) {
                  
                    echo '<a class="dropdown-item titre-playlist" type="button" href="/pages/player.php?id='.$videoPlaylist["id"].'">'.$videoPlaylist["title"].'</a>';
                
                }
            }
            echo '</div>';
        }
        echo ' </div>';
        echo "<br>";
    }

    ?>

</div>