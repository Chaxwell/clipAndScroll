<?php

$sql = "SELECT * FROM users ORDER BY score DESC LIMIT 10;";
$reponse = $bdd->query($sql);
$users = $reponse->fetchAll();
?>


<div class="leadereboard">

<div>
    <h3>Leaderboard</h3>

    <?php foreach($users as $user): ?>
	<ul>

	    <li><?= $user['nickname']?>  <?= $user['score']?> </li>

	    <li><?= $user['nickname']?>  <?= $user['score']?>    </li>

	</ul>
	
    <?php endforeach ?>
</div>
