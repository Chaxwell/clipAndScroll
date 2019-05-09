<<<<<<< HEAD
<?php

$sql = "SELECT * FROM users ORDER BY score DESC LIMIT 10;";
$reponse = $bdd->query($sql);
$users = $reponse->fetchAll();
?>

<div class="leadereboard">
    <h3>Leaderboard</h3>

    <?php foreach($users as $user): ?>
	<ul>
	    <li><?= $user['nickname']?>  <?= $user['score']?> </li>
	</ul>

	
    <?php endforeach ?>
</div>
=======
hello, world
>>>>>>> parent of 8d89a6e... leaderboard fait (au moins la logique)
