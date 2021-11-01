<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['corbli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn'] ==true) {
		//echo "In";
		echo get_file_contents('Location: www.corbli.com/html/secret.html');
	}
	else {
		//echo "Out";
		header('Location: index.html');
	}
?>
