<!DOCTYPE html>
<?php
	if (!(isset($_SESSION['corbli_isLoggedIn']) || $_SESSION['corbli_isLoggedIn'] ==true)) {
		header('corbli.com/index.html');
	}
	else {
		echo get_file_contents('corbli.com/html/secret.html');
	}
?>
