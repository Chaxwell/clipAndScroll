<?php 
session_start();
include "config/connexion-bdd.php";

$req = $bdd->prepare("SELECT * FROM playlists WHERE userId = ?");

$rep = $bdd->prepare("SELECT * FROM videos WHERE id = ?");


$req->execute(array($_SESSION["userId"]));



$playlists = $req->fetchAll();
$videoPlaylists = $rep->fetchAll();

$rep->execute(array($playlists["videoId"]));
?>
<div class="playlist">
    
<?php

foreach ($playlists as $playlist) {

    echo "<div class='playlist-dropdown' onclick='dropdown-playlist-toggle()'>".$playlist["playlistName"]."</div>";
    echo "<br>";
    foreach ($videoPlaylists as $videoPlaylist) {
    
   
    echo " <div class='playlist-video'>
            <h3 class='playlist-titre-video'>".$videoPlaylist["title"]."</h3>
            <button class='playlist-delete-video'></button>
    
    </div> "; 
}
}

?>

</div>