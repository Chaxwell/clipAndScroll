<?php
//include our settings, connect to database etc.
// TODO include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';
//getting required data
// TODO? $DATA=dbgetarr("SELECT * FROM links");
$pagetitle = "Change ce titre dans pages/clip-upload.php";
//etc
//and then call a template:
$tpl = "../layouts/clip-upload.tpl.php";
include "../layouts/layout.php";
