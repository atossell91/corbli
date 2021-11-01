<?php
    $pword = $_POST['password'];
    $res = password_hash($pword, PASSWORD_BCRYPT);
    echo "Result: " . $res;
?>