<!DOCTYPE html>
<?php
	session_start();
?>
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
			<a href="html/login.html">Login</a>
			<a href="../php/addShiftForm.php">Add Shift</a>
            <a href="/displayShifts.php">Display Shifts</a>
		</div>
		<p1>Welcome to Corbli</p1>
		<?php
			if (isset($_SESSION['corbli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn']==true) {
				echo "<p2>You are logged in!</p2>";
			}
			else {
				echo "<p2>You are not logged in!</p2>";
			}
		?>
	</body>
</html>
