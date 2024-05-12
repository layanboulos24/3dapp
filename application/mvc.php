<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
if ($pageURI == "/~lb768/3dapp/assignment/") {
	new Controller('home');
} else {
	$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	new Controller($pageURI);
}

?>