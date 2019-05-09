<?php
session_start();

echo $_SESSION['userId'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Document</title>
</head>

<body>

    <div class="dropdown">
        <a class="btn btn-info" href="#" role="button" id="editDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            ...
        </a>

        <?php
        printf('
        <div class="dropdown-menu" aria-labelledby="editDropDown">
        ');

        // if $videoId is in $req(SELECT * FROM playlists WHERE userId = ?)
        if (false) {
            printf('
            <a class="dropdown-item" href="#">Supprimer</a>
            <a class="dropdown-item" href="#">Modifier</a>
            ');
        }
        printf('
            <div class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">&CirclePlus; à la playlist</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Playlist n°1</a>
                        <a href="#" class="dropdown-item">Playlist n°2</a>
                        <a href="#" class="dropdown-item">Playlist n°3</a>
                    </div>
            </div>
        </div>
        ');
        ?>


        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script>
            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');


                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });


                return false;
            });
        </script>
</body>

</html>