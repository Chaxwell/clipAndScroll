<?php
require($path . '/partials/config/connexion-bdd.php');

// FIXME: This code must be executed ONLY if the user owns the video
$videoId = htmlspecialchars($_GET['id']);

$req = $bdd->prepare("SELECT * FROM videos WHERE id = ?");
$req->execute(array($videoId));
$videoIntel = $req->fetch();

?>

<div class="form-frame">
    <form action="../processing/traitement-update.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="form-group">
            <img width="160px" height="90" src="<?= '../assets/uploads/thumbnails/' . $videoIntel['thumbnail'] ?>" alt="Vignette vidéo">
            <label for="clip-thumbnail">Choisissez votre miniature</label>
            <input type="file" class="form-control-file" id="clip-thumbnail" name="clipThumbnail" accept="image/*">
        </div>
        <div class="form-group">
            <label for="clip-name">Nom du clip</label>
            <input type="text" class="form-control" id="clip-name" placeholder="Le nom de votre clip" name="clipName" value="<?= $videoIntel['title']; ?>">
        </div>
        <div class="form-group">
            <label for="clip-description">Description</label>
            <textarea class="form-control" id="clip-description" rows="5" name="clipDescription" placeholder="Sa description"><?= $videoIntel['description']; ?></textarea>
        </div>
        <input type="hidden" name="videoId" value="<?= $videoId ?>">

        <button class="btn btn-primary" type="submit" name="submit">Modifier</button>
    </form>
</div>