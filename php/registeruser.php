<?php
    function createRandomString($len) {
        $chars = "01234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $str = "password123";
        for ($n = 0; n < $len; $n++) {
            $str .= $chars[rand(0, strlen($chars))];
        }
        return $str;
    }
    $host = "localhost";
    $user = "ant";
    $password = "2yqtqnn4avyyvbnax7cke7onrj3q7kpf";
    $dbname = "corbli";

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die ("Error - " . $conn->connect_error);
    }

    $username = $_POST['uname'];
    $password = createRandomString(8);

    $str_username = "\"" . $username . "\"";
    $str_password = "\"" . $password . "\"";
    $query = "INSERT INTO    CREDENTIALS VALUES(" . $str_username . ", " . $str_password . ");";
    if ($conn->query($query) === TRUE) {
        echo "Query: " . $query . "<br>" . "Result: " . $res;
        echo "<br> Username: " . $username . " Password: " . $password;
    }
    else {
        echo "Error - " . $query . "<br>" . $conn->error;
    }
    $conn->close();
?>