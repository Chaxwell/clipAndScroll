<div class="form-frame">
    <form action="../processing/traitement-upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="clipFile">Choisissez votre clip</label>
            <input type="file" class="form-control-file" id="clipFile">
        </div>
        <div class="form-group">
            <label for="thumbnailFile">Choisissez votre miniature</label>
            <input type="file" class="form-control-file" id="thumbnailFile">
        </div>
        <div class="form-group">
            <label for="clipName">Nom du clip</label>
            <input type="text" class="form-control" id="clipName" placeholder="Le nom de votre clip">
        </div>
        <div class="form-group">
            <label for="clipDescription">Description</label>
            <textarea class="form-control" id="clipDescription" rows="5" placeholder="Sa description"></textarea>
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Envoyer le clip</button>
    </form>
</div>