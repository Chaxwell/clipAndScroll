<?php
session_start();

echo $_SESSION['userId'];

?>
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
    ');
    ?>
</div>

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
