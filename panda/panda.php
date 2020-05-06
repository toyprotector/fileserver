<?php
if(!defined('STDIN')) define('STDIN', fopen('php://stdin', 'rb'));
if(!defined('STDOUT')) define('STDOUT', fopen('php://stdout', 'wb'));
if(!defined('STDERR')) define('STDERR', fopen('php://stderr', 'wb'));

$txt = fopen("panda.txt", "w");
fwrite($txt, $_SERVER['REMOTE_ADDR'] . "\n");
fclose($txt);

header('Content-Type: image/JPEG');

//echo fread(fopen('./panda.jpeg', 'rb'), filesize("./panda.jpeg"));

readfile("panda.jpeg");

?>
