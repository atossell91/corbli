<?php
    $host = "localhost";
    $user = "ant";
    $password = "2yqtqnn4avyyvbnax7cke7onrj3q7kpf";
    $dbname = "corbli";
    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("An error ocurred" . $conn->connect_error);
    }

    $query="SELECT username, password FROM CREDENTIALS where username=\"" . $_POST['uname'] . "\";";
    $res=$conn->query($query);

    if ($res->num_rows < 1) {
        echo "Error - Couldn't find user.";
        echo "<br>" . $query;
    }
    if ($res->num_rows > 1) {
        echo "Error - too many results.";
    }

    $row=$res->fetch_assoc();
    if ($row['username']!=$_POST['uname'] || $row['password']!=$_POST['pword']) {
        echo "Invalid credentials. Please try again";
        exit("Exit message");
    }
    session_start();
    $_SESSION['corbli_isLoggedIn']='true';
?>