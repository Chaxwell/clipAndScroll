<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>My site. <?= $pagetitle ?></title>
	<link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
	<?php include "../partials/header.php" ?>
	<div id="page">
		<?php include $tpl ?>
	</div>


	<!-- rempli moi (ou pas) -->
	<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
	<script src="../assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="../assets/js/script.js"></script>

</body>

</html>