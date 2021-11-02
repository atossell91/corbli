<?php
	session_start();
	$disabled = true;
	if (!(isset($_SESSION['corbli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn'] ==true) || disabled) {
		header('Location: ../index.php');
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="../css/styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../scripts/calc_hours.js"></script>
	</head>
	<body>
		<div class="title">
			Corbli
		</div>
		<div class="links">
			<a href="../index.php">Home</a>
			<a href="about.html">About</a>
			<a href="hours_calc.html">Calculate Hours</a>
		</div>
		<img src="../images/bbw.jpg">
	</body>
</html>
