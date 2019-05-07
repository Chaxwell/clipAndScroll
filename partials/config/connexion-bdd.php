<?php

try {
    $bdd = new PDO("mysql:host=10.0.3.201;dbname=clipAndScroll;charset=utf8", "root", "");
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $err) {
    die('Erreur: ' . $err->getMessage());
}

