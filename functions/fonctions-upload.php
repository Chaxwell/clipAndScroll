<?php

function uploadFileToDB($bdd, $userId, $thumbnail, $title, $description, $pathToVideo)
{
    $req = $bdd->prepare("INSERT INTO videos(userId, thumbnail, title, description, pathToVideo)
                          VALUES(?, ?, ?, ?, ?)");
    $req->execute(array($userId, $thumbnail, $title, $description, $pathToVideo));
}

function randomString()
{
    $asciiLowercase = 'abcdefghijklmnopqrstuvwxyz';
    $asciiUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $asciiNumbers = '0123456789';

    // We generate 10 times the ascii strings and shuffle the whole
    $seed = str_split(str_repeat($asciiLowercase, 10) . str_repeat($asciiUppercase, 10) . str_repeat($asciiNumbers, 10));

    shuffle($seed);
    $randomString = '';

    // We pick 255 random characters from the seed
    foreach (array_rand($seed, 255) as $n) $randomString .= $seed[$n];

    return $randomString;
}
