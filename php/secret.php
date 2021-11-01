<!DOCTYPE html>
<?php
	if (!(isset($_SESSION['corbli_isLoggedIn']) || $_SESSION['corbli_isLoggedIn'] ==true)) {
		header('Location: www.corbli.com/index.html');
	}
	else {
		echo get_file_contents('Location: www.corbli.com/html/secret.html');
	}
?>
