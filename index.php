<?php
include('utils.php');

$path = getPath($_GET);

if(file_exists($path)) {
    ob_start();
    include($path);
	$content = ob_get_contents();
	ob_end_clean();
	include('main.php');
} else {
	header("HTTP/1.1 404 Not Found");
    ob_start();
    include('layouts/404.php');
	$content = ob_get_contents();
	ob_end_clean();
	include('main.php');
}