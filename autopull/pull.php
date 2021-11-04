<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

//if ( $_POST['payload'] ) {
echo shell_exec('whoami') . '<br>';
$output = shell_exec('cd /var/www/corbli && git pull 2>&1');
echo 'Whiskey' . '<br>';
echo '|' . $output . '| <br>';
//}

?>hi