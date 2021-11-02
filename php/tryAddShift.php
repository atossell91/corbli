<?php
    function quot($val) {
        return '\'' . $val . '\'';
    }
    $host = 'localhost';
    $dbuser = 'ant';
    $password = '2yqtqnn4avyyvbnax7cke7onrj3q7kpf';
    $dbname = 'corbli';

    session_start();
    $user = $_SESSION['user'];

    if (!isset($_SESSION) || !$_SESSION['corbli_isLoggedIn']) {
        header('Location: ../index.php');
        exit;
    }

    $conn = new mysqli($host, $dbuser, $password, $dbname);
    if ($conn->connect_error) {
        die ('Error - ' . $conn->connect_error);
    }
    $query = 'INSERT INTO SHIFTS (username, startDate, endDate) VALUES (' . 
        quot($user) . ',' . quot($_POST['shiftStart']) . ',' . 
        quot($_POST['shiftEnd']) . ')';

    $res = $conn->query($query);

    if ($res === true) {
        header('Location: ../php/addShiftForm.php');
    }
    else {
        echo $conn->error;
    }

    $conn->close();
?>