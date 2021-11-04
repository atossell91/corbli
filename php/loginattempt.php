<?php
    session_start();
    $host = "localhost";
    $user = "ant";
    $password = "2yqtqnn4avyyvbnax7cke7onrj3q7kpf";
    $dbname = "corbli";
    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("An error ocurred" . $conn->connect_error);
    }

    $query="SELECT username, password FROM CREDENTIALS where username=\"" . $_POST['username'] . "\";";
    $res=$conn->query($query);

    if ($res->num_rows < 1) {
        echo "Error - Couldn't find user.";
        echo "<br>" . $query;
    }
    if ($res->num_rows > 1) {
        echo "Error - too many results.";
    }

    $row=$res->fetch_assoc();
    if ($row['username']==$_POST['username'] && password_verify($_POST['password'],$row['password'])) {
        $_SESSION['corbli_isLoggedIn']=true;
        $_SESSION['user']=$_POST['uname'];
        header('Location: ../index.php');
    }
    header('Location: ../index.php');

    $conn->close();
?>