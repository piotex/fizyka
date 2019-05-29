<?php
include('utils.php');
ini_set( "display_errors", 0); 

$data = getData($_GET);
try
{
	ob_start();
    include($data['path']);
    $content = ob_get_contents();
    ob_end_clean();
    include('main.php');
}
catch (Exception $e)
{
	header("HTTP/1.1 404 Not Found");
    ob_start();
    include('layouts/404.php');
	$content = ob_get_contents();
	ob_end_clean();
	include('main.php');
}