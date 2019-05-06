<?php
session_start();

try {
    $bdd = new PDO("mysql:host=127.0.0.1;dbname=clipAndScroll;charset=utf8", "root", "");
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $err) {
    die('Error : ' . $err->getMessage());
}

require('../functions/fonctions-connexion-inscription.php');

$req = $bdd->prepare("SELECT * FROM users");
$req->execute();
$usersNameAndPassword = $req->fetchAll();

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

        // Redirection to index.php
        header("Location: ../../index.php");
        die();
    } else {
        die("Erreur: ce pseudo est déjà utilisé.");
    }
}

if (isset($_POST['connexion'])) {
    // TODO:
    echo 'connexion';
}
