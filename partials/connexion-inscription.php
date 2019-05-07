<<<<<<< HEAD

    <!-- POUR AXEL :
    Tu peux tout modifier sur ce lien sauf :
    1/ le data-toggle
    2/ le data-target -->
    <a href="#" class="btn connexion btn-primary" data-toggle="modal" data-target="#connexion">Connexion</a>

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
                    <form action="partials/processing/traitement-connexion-inscription.php" method="post" autocomplete="off" oninput="passwordConfirmation.setCustomValidity(passwordConfirmation.value != password.value ? 'Mots de passe différents' : '')">
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

=======
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
>>>>>>> d2f4aacd6d0f739d9d17fcbd26b9aaceb6a5773f
