<?php 

require "config.php";
require "php/urls.php";
require "php/config.web.php";
require "php/config.server.php";
require "php/functions/mc-online.php";

if(isset($_GET['page'])){
	$page = $_GET['page'];
} else{
	$page = "home";
}

$homePage = "home";

switch($page){
	case 'home':
		$content = "php/pages/{$homePage}.php";
		break;

	default:
		$content = "php/pages/{$homePage}.php";
		break;
}

include_once $content;

?>