<?php
//include our settings, connect to database etc.
// TODO include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';
//getting required data
// TODO? $DATA=dbgetarr("SELECT * FROM links");
$pagetitle = "Change ce titre dans pages/player.php";
//etc
//and then call a template:
$tpl = "layouts/pages.tpl.php";
include "/layout.php";
?>
