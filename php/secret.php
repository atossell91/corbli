<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['corbli_isLoggedIn']) && $_SESSION['corbli_isLoggedIn'] ==true) {
		//echo get_file_contents('Location: www.corbli.com/html/secret.html');
		echo "In";
	}
	else {
		//header('Location: index.html');
		echo "Out";
	}
?>
