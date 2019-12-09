<meta property="og:description" content="<?php 
$ip_address = $_SERVER['REMOTE_ADDR'];
echo $ip_address;
file_put_contents('visitors.log', $ip_address . PHP_EOL, FILE_APPEND);?>" />
