<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];

require $path . "/partials/config/connexion-bdd.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
	<title><?= $pagetitle ?></title>
	<link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/styles.css">
    </head>

    <body>
	<?php require $path . "/partials/header.php" ?>

	<div id="page" class="container">
            <?php require $tpl ?>
	</div>

    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>


</html>
