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
  <button class="btn btn-secondary dropdown-toggle-playlist" type="button" >
   ' . $playlistName["playlistName"] . '
  </button>';

        foreach ($playlists as $playlist) {
         
            echo '<div class="dropdown-menu-playlist dropdown-visible" >';
            foreach ($nameVideoPlaylists as $nameVideoPlaylist) {
               
                $repvideo = $bdd->prepare("SELECT * FROM videos WHERE id = ?");

                $repvideo->execute(array($nameVideoPlaylist["videoId"]));

                $videoPlaylists = $repvideo->fetchAll();

                foreach ($videoPlaylists as $videoPlaylist) {
                  
                    echo $videoPlaylist["title"];
                    echo "<br>";
                }
            }
            echo '</div>';
        }
        echo ' </div>';
        echo "<br>";
    }

    ?>

</div>