<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

//if ( $_POST['payload'] ) {
$output = shell_exec('cd /var/www/corbli && git reset –hard HEAD && git pull');
echo 'Whiskey';
echo $output;
//}

?>hi