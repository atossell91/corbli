<?php
    function createRandomString($len) {
        $chars = "01234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $str = "";
        for ($n = 0; n < $len; ++$n) {
            $str = $str . $chars[rand(0, strlen($chars))];
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
    $query = "INSERT into CREDENTIALS VALUES(" . $str_username . ", " . $str_password . ");";
    $res = $conn->query("INSERT into CREDENTIALS VALUES(" . $str_username . ", " . $str_password . ");");
    echo "Query: " . $query . "<br>" . "Result: " . $res;
    echo "<br> Username: " . $username . " Password: " . $password;
?>