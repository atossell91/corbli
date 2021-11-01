<!DOCTYPE html>
<html>
	<head>
		<link href="css/styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="title">
			Corbli
		</div>
		<div class="links">
			<a href="index.php">Home</a>
			<a href="html/about.html">About</a>
			<a href="html/hours_calc.html">Calculate Hours</a>
			<a href="html/request.php">SQL Test</a>
			<a href="html/login.html">Login</a>
			<a href="php/secret.php">Secret</a>
		</div>
		<p1>Welcome to Corbli</p1>
		<?php
			if (isset($_SESSION['cobli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn']==true) {
				echo "<p2>You are logged in!</p2>";
			}
			else {
				echo "<p2>You are logged in!</p2>";
			}
		?>
	</body>
</html>
