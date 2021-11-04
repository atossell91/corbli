<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

//if ( $_POST['payload'] ) {
$output = shell_exec('cd /var/www/corbli && git reset –hard HEAD && git pull');
$output = shell_exec('ls /var/www/corbli');
echo 'Whiskey' . '<br>';
echo '|' . $output . '| <br>';
//}

?>hi