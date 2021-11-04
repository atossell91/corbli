<?php

    session_start();

    if (!isset($_SESSION) || !$_SESSION['corbli_isLoggedIn']) {
        header('Location: ../index.php');
        exit;
    }
    $user = $_SESSION['user'];

    function quot($val) {
        return '\'' . $val . '\'';
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
			<a href="index.php">Home</a>
			<a href="../html/about.html">About</a>
			<a href="../html/hours_calc.html">Calculate Hours</a>
			<a href="../html/login.html">Login</a>
			<a href="../php/addShiftForm.php">Add Shift</a>
            <a href="../php/displayShifts.php">Display Shifts</a>
		</div>
        <div class="displayResults">
    <?php
        $host = 'localhost';
        $dbuser = 'ant';
        $dbpassword = '2yqtqnn4avyyvbnax7cke7onrj3q7kpf';
        $dbname= 'corbli';

        $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die('Connect Error - ' . $conn->connect_error);
        }
        
        //$query = 'SELECT * FROM SHIFTS WHERE username=' . quot($user) . ';';
        $query = 'SELECT username FROM MYTABLE;';
        $res = $conn->query($query);

        if ($res === true) {
            while ($rows = $res->fetch_assoc()) {
                echo '<div class=\'timeRow\'><div class=\'timeCell\'' . $rows['startDate'] . '</div>';
                echo '<div class=\'timeCell\'' . $rows['endDate'] . '</div></div><br>';
            }
        }
        else {
            echo 'Query error |' . $res->error . '| <br>';
            echo 'Query was --- <' . $query . '>';
        }

        $conn->close();
    ?>
        </div>
	</body>
</html>