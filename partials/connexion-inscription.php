<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Document</title>
</head>

<body>

    <!-- POUR AXEL :
    Tu peux tout modifier sur ce lien sauf :
    1/ le data-toggle
    2/ le data-target -->
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#connexion">Connexion</a>

    <!-- MODAL -->
    <div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="connexion" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="btn-close d-flex justify-content-end pr-2 pt-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title mx-auto" id="connexion">Connectez-vous</h5>
                </div>
                <div class="modal-body mx-auto">
                    <form action="processing/traitement-connexion-inscription.php" method="post" autocomplete="off" oninput="passwordConfirmation.setCustomValidity(passwordConfirmation.value != password.value ? 'Mots de passe différents' : '')">
                        <div class="form-group">
                            <label for="nickname">Pseudo</label>
                            <input class="form-control" type="text" id="nickname" name="nickname" placeholder="Votre pseudo">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="passwordConfirmation" placeholder="Confirmation">
                        </div>
                        <!-- TODO: Checkbox pour ajout de cookie -->
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="stayConnected">
                            <label class="form-check-label" for="stayConnected">Se souvenir de moi</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary" name="inscription">Inscription</button>
                        <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN MODAL -->

    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>