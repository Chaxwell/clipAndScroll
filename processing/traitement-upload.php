<?php
// session_start();
require('../functions/fonctions-upload.php');
require('../partials/config/connexion-bdd.php');

// We check if the globals aren't empty
if (!empty($_FILES['clipFile']) && !empty($_FILES['clipThumbnail']) && !empty($_POST['clipName']) && !empty($_POST['clipDescription'])) {
    $clipname = htmlspecialchars($_POST['clipName']);
    $clipdescription = htmlspecialchars($_POST['clipDescription']);

    //          Thumbnail upload process

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
    }


    //          Clip upload process

    // Setting up environment
    $target_dir = "../assets/uploads/clips/";
    $target_video_file = $target_dir . basename($_FILES['clipFile']['name']);
    $videoFileType = strtolower(pathinfo($target_video_file, PATHINFO_EXTENSION));

    // Check if file is an actual video
    $check = shell_exec("file " . $_FILES['clipFile']['name'] . " --mime-type |grep -i video|wc -l");
    if ($check == '0') {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: le fichier envoyé n\'est pas une vidéo');
    }

    // File renaming
    $randomString = randomString();
    $target_video_file = $randomString . '.' . $videoFileType;


    // Check if the video weighs 'low' 300 Mo max
    if ($_FILES['clipFile']['size'] > 300000000) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: la taille de votre vidéo est trop élevée');
    }

    // Check the video extension
    if (
        $videoFileType != "mp4" && $videoFileType != "flv" && $videoFileType != "mpeg4"
        && $videoFileType != "mkv" && $videoFileType != "wav"
    ) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: l\'extension de votre vidéo ne fait pas partie des extensions autorisées');
    }

    // Upload the video to its folder
    if (!move_uploaded_file($_FILES['clipFile']['tmp_name'], $target_dir . $target_video_file)) {
        header("refresh:2;url=/pages/clip-upload.php");
        die('Erreur: une erreur s\'est produite pendant l\'upload de votre vidéo');
    }


    uploadFileToDB($bdd, 6, $target_image_file, $clipname, $clipdescription, $target_video_file);
    header('Location: /pages/channel.php');
} else {
    header("refresh:2;url=/pages/clip-upload.php");
    die('Erreur: un champ n\'est pas rempli');
}
