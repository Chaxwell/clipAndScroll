<?php
$path = $_SERVER['DOCUMENT_ROOT'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<<<<<<< HEAD
    <head>
	<title>My site. <?=$pagetitle?></title>
	<link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
	<?php include "partials/header.php" ?>
	<div id="page">
	    <?php include $tpl ?>
=======

<head>
    <title><?= $pagetitle ?></title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <?php include $path . "/partials/header.php" ?>
    
    <div id="page">
		<?php include $tpl ?>
>>>>>>> d2f4aacd6d0f739d9d17fcbd26b9aaceb6a5773f
	</div>


	<!-- rempli moi (ou pas) -->
<<<<<<< HEAD
	<script src=""></script>
	<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    </body>
=======
	<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
	<script src="../assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="../assets/js/script.js"></script>

</body>

>>>>>>> d2f4aacd6d0f739d9d17fcbd26b9aaceb6a5773f
</html>
