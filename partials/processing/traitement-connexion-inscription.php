<?php
session_start();

require('../config/connexion-bdd.php');
require('../functions/fonctions-connexion-inscription.php');


if (isset($_POST['inscription'])) {
    // Check if post globals aren't empty
    if (!empty($_POST['nickname']) && !empty($_POST['password'])) {
        $nickname = htmlspecialchars($_POST['nickname']);
        $password = htmlspecialchars($_POST['password']);
    } else {
        die("Erreur: un champ n'est pas rempli.");
    }

    // Check if the nickname doesn't already exist
    if (isNicknameUnique($bdd, $nickname)) {
        // We encrypt the user password
        $saltAndHashedPassword = encryptSaltyString($password);
        $salt = $saltAndHashedPassword['salt'];
        $hashedPassword = $saltAndHashedPassword['hashed'];

        // We register the user
        $req = $bdd->prepare("INSERT INTO users(nickname, salt, password)
                              VALUES(?, ?, ?)");
        $req->execute(array($nickname, $salt, $hashedPassword));

        // We retrieve all the intel about the user from its nickname
        $userIntel = allUserIntelFromNickname($bdd, $nickname);

        // Finally, we set its session, thus connecting him to the website
        $_SESSION['userId'] = $userIntel['id'];
        $_SESSION['nickname'] = $nickname;

        // Redirection to index.php
        header("Location: ../../index.php");
        die();
    } else {
        die("Erreur: ce pseudo est déjà utilisé.");
    }
}

if (isset($_POST['connexion'])) {
    // Check if post globals aren't empty
    if (!empty($_POST['nickname']) && !empty($_POST['password'])) {
        $nickname = htmlspecialchars($_POST['nickname']);
        $password = htmlspecialchars($_POST['password']);
    } else {
        die("Erreur: un champ n'est pas rempli.");
    }

    // Check if the nickname exists
    if (!isNicknameUnique($bdd, $nickname)) {
        // We retrieve all the intel about the user from its nickname
        $userIntel = allUserIntelFromNickname($bdd, $nickname);

        // We check if the password provided is equal to the one in the DB
        if (isPasswordValidFromNickname($bdd, $password, $nickname)) {
            // We set its session, thus connecting him to the website
            $_SESSION['userId'] = $userIntel['id'];
            $_SESSION['nickname'] = $nickname;

            // Redirection to index.php
            header("Location: ../../index.php");
            die();
        } else {
            echo $password, $nickname;
            die("Erreur: mauvais mot de passe.");
        }
    }
}
