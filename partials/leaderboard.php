<?php

/* A supprimmer quand ce sera inclus - c'est juste pour le dev */
include "config/connexion-bdd.php";

$sql = "SELECT * FROM users ORDER BY score DESC LIMIT 10;";
$reponse = $bdd->query($sql);
$users = $reponse->fetchAll();
?>

<div>
    <h3>Leaderboard</h3>

    <?php foreach($users as $user): ?>
	<ul>
	    <li><?= $user['nickname']?>  <?= $user['score']?>    </li>
	</ul>

	
    <?php endforeach ?>
</div>
