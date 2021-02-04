<?php 

$s = $_SERVER['SERVER_NAME'];
$a = explode('/', $_SERVER['PHP_SELF'], 3);

if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) {
	$completeURL = "http://".$s."/".$a[1];
} else{
	$completeURL = "http://".$s;
}

if (!defined('urls')) define('urls', [
		'css' 		=> $completeURL . '/assets/css',
		'js'		=> $completeURL . '/assets/js',
		'images' 	=> $completeURL . '/assets/images'
	]
);

?>