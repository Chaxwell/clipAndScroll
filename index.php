<?php
session_start();
//include our settings, connect to database etc.
// TODO include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';
//getting required data
// TODO? $DATA=dbgetarr("SELECT * FROM links");
<<<<<<< HEAD
$pagetitle = "";
=======
$pagetitle = "clip & scroll !";
>>>>>>> d2f4aacd6d0f739d9d17fcbd26b9aaceb6a5773f
//etc
//and then call a template:
$tpl = "layouts/index.tpl.php";
include "layouts/layout.php";
