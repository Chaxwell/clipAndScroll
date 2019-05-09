<?php

function updateFileInDB($bdd, $videoId, $userId, $thumbnail, $title, $description, $pathToVideo)
{
    $req = $bdd->prepare("UPDATE videos
                 SET userId = ?
                 thumbnail = ?
                 title = ?
                 description = ?
                 pathToVideo = ?
                 WHERE id = ?");
    $req->execute(array($userId, $thumbnail, $title, $description, $pathToVideo, $videoId));
}
