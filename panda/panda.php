<?php
if(!defined('STDIN')) define('STDIN', fopen('php://stdin', 'rb'));
if(!defined('STDOUT')) define('STDOUT', fopen('php://stdout', 'wb'));
if(!defined('STDERR')) define('STDERR', fopen('php://stderr', 'wb'));

$txt = fopen("panda.txt", "a");
fwrite($txt, $_SERVER['HTTP_X_FORWARDED_FOR'] . "\n");

//REMOTE_ADDR

fclose($txt);

header('Content-Type: image/JPEG');

//echo fread(fopen('./panda.jpeg', 'rb'), filesize("./panda.jpeg"));

readfile("panda.jpeg");

?>
