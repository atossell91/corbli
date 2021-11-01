<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['corbli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn'] ==true) {
		header('Location: ../html/secret.html')
	}
	else {
		header('Location: ../index.php');
	}
?>
