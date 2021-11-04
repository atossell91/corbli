<?php
    if ($_POST['payload']) {
        shell_exec('cd /var/www/corbli && git pull');
    }
?>