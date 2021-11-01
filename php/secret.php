<!DOCTYPE html>
<?php
	if (isset($_SESSION['corbli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn'] ==true) {
		echo get_file_contents('Location: www.corbli.com/html/secret.html');
	}
	else {
		header('Location: index.html');
	}
?>
