<?php
$sql = "SELECT * FROM videos LIMIT 10;";
$reponse = $bdd->query($sql);
$videos = $reponse->fetchAll();

$videosPath = "/assets/uploads/clips/";
?>

<main class="row videos_and_aside">

    <?php foreach($videos as $video): ?>
	<div class="col-md-4 ">
	    <video width="100%" controls>
		<source src="<?= $videosPath . $video['pathToVideo']?>" type="video/mp4">
		Votre navigateur ne supporte pas le tag video
	    </video> 
	</div>

	<div class="col-md-5">
	    <h3><?= $video['title']?></h3>
	    <p>
		<?= $video['description']?>
	    </p>	
	</div>
    <?php endforeach ?>

    <div class="col-md-2 offset-md-1">
	<?php require $path . "/partials/leaderboard.php"; ?>
    </div>
    
</main>
