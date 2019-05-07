<?php

try {
<<<<<<< HEAD
    $bdd = new PDO("mysql:host=127.0.0.1;dbname=clipAndScroll;charset=utf8", "root", "");
=======
    $bdd = new PDO("mysql:host=10.0.3.201;dbname=clipAndScroll;charset=utf8", "root", "");
>>>>>>> d2f4aacd6d0f739d9d17fcbd26b9aaceb6a5773f
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $err) {
    die('Erreur: ' . $err->getMessage());
}

