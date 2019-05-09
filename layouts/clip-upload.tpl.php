<div class="form-frame">
    <form action="/processing/traitement-upload.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="form-group">
            <label for="clip-file">Choisissez votre clip</label>
            <input type="file" class="form-control-file" id="clip-file" name="clipFile" accept="video/*">
        </div>
        <div class="form-group">
            <label for="clip-thumbnail">Choisissez votre miniature</label>
            <input type="file" class="form-control-file" id="clip-thumbnail" name="clipThumbnail" accept="image/*">
        </div>
        <div class="form-group">
            <label for="clip-name">Nom du clip</label>
            <input type="text" class="form-control" id="clip-name" placeholder="Le nom de votre clip" name="clipName">
        </div>
        <div class="form-group">
            <label for="clip-description">Description</label>
            <textarea class="form-control" id="clip-description" rows="5" name="clipDescription" placeholder="Sa description"></textarea>
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Envoyer le clip</button>
    </form>
</div>