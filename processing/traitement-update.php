<?php
session_start();
require('../partials/config/connexion-bdd.php');
require('../functions/fonctions-upload.php');
require('../functions/fonctions-update.php');


if (!empty($_FILES['clipThumbnail']) && !empty($_POST['clipName']) && !empty($_POST['clipDescription']) && !empty($_POST['videoId'])) {
    $clipname = $_POST['clipName'];
    $clipdescription = $_POST['clipDescription'];

    // FIXME: This code must be executed ONLY if the user owns the video
    $videoId = htmlspecialchars($_POST['videoId']);
    $req = $bdd->prepare("SELECT * FROM videos WHERE id = ?");
    $req->execute(array($videoId));
    $oldVideo = $req->fetch();

    //          Thumbnail update process
    // Setting up environment
    $target_dir = "../assets/uploads/thumbnails/";
    $target_image_file = $target_dir . basename($_FILES['clipThumbnail']['name']);
    $imageFileType = strtolower(pathinfo($target_image_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image
    $check = getimagesize($_FILES['clipThumbnail']['tmp_name']);
    if ($check === false) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: le fichier envoyé n\'est pas une image');
    }

    // File renaming
    $randomString = randomString();
    $target_image_file = $randomString . '.' . $imageFileType;

    // Check if the image weighs low
    if ($_FILES['clipThumbnail']['size'] > 5000000) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: la taille de votre image est trop élevée');
    }

    // Check the image extension
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: l\'extension de votre image ne fait pas partie des extensions autorisées');
    }

    // Upload the thumbnail to its folder
    if (!move_uploaded_file($_FILES['clipThumbnail']['tmp_name'], $target_dir . $target_image_file)) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: une erreur s\'est produite pendant l\'upload de votre image');
    } else {
        // If no error happened during the upload
        unlink('../assets/uploads/thumbnails' . $oldVideo['thumbnail']);
        updateFileInDB($bdd, $videoId, $_SESSION['userId'], $target_image_file, $clipname, $clipdescription, $oldVideo['pathToVideo']);
    }
} elseif (empty($_FILES['clipThumbnail'])) {
    // On garde l'image actuelle
}
