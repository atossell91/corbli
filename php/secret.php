<!DOCTYPE html>
<?php
	if (!(isset($_SESSION['corbli_isLoggedIn']) || $_SESSION['corbli_isLoggedIn'] ==true)) {
		header('index.html');
	}
	else {
		echo get_file_contents('../html/secret.html');
	}
?>
