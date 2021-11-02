<?php
    session_start();

    if (!isset($_SESSION) || !$_SESSION['corbli_isLoggedIn']) {
        header('Location: ../index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<link href="../css/styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="title">
			Corbli
		</div>
		<div class="links">
			<a href="../index.php">Home</a>
			<a href="../html/about.html">About</a>
			<a href="../html/hours_calc.html">Calculate Hours</a>
			<a href="../html/login.html">Login</a>
			<a href="../php/addShiftForm.php">Add Shift</a>
		</div>
		<form action="tryAddShift.php" method="post">
			<label for="shiftStart">Start Time:</label>
			<input type="datetime-local" name="shiftStart">
			<label for="shiftEnd">End Time:</label>
			<input type="datetime-local" name="shiftEnd">
			<button action="submit">Submit</button>
		</form>
	</body>
</html>