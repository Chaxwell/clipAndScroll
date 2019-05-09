<?php
//include our settings, connect to database etc.
// TODO include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';
//getting required data
// TODO? $DATA=dbgetarr("SELECT * FROM links");
$pagetitle = "Change ce titre dans pages/clip-update.php";
//etc
//and then call a template:
$path = $_SERVER['DOCUMENT_ROOT'];
$tpl = $path . "/layouts/clip-update.tpl.php";
include $path . "/layouts/layout.php";
