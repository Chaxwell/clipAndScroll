<?php

function encryptSaltyString($string)
{
    $asciiLowercase = 'abcdefghijklmnopqrstuvwxyz';
    $asciiUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $asciiNumbers = '0123456789';

    // Creation of a seed from which we will pull 64 random characters
    $seed = str_split(str_repeat($asciiLowercase, 10) . str_repeat($asciiUppercase, 10) . str_repeat($asciiNumbers, 10));

    shuffle($seed);
    $salt = '';

    foreach (array_rand($seed, 64) as $n) $salt .= $seed[$n];
    $hashedString = hash('sha256', $string . $salt);

    return ['salt' => $salt, 'hashed' => $hashedString];
}

function isNicknameUnique($bdd, $nickname)
{
    $req = $bdd->prepare("SELECT * FROM users WHERE nickname = ?");
    $req->execute(array($nickname));
    $userIntel = $req->fetch();

    // If the request is empty, the nickname is therefore unique
    if (!$userIntel) return true;
    else return false;
}

function isPasswordValidFromNickname($bdd, $password, $nickname)
{
    $req = $bdd->prepare("SELECT * FROM users WHERE nickname = ?");
    $req->execute(array($nickname));
    $userIntel = $req->fetch();

    $salt = $userIntel['salt'];
    $hashedPassword = $userIntel['password'];

    // If the passwords are equal
    if (hash('sha256', $password . $salt) == $hashedPassword) return true;
    else return false;
}

function allUserIntelFromNickname($bdd, $nickname)
{
    $req = $bdd->prepare("SELECT * FROM users WHERE nickname = ?");
    $req->execute(array($nickname));
    $userIntel = $req->fetch();

    return $userIntel;
}
