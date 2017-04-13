<?php 
ini_set('display_errors',0);
error_reporting(E_ALL|E_STRICT);


//inculde header
include('head.php');


	$page = ( $_GET['p'] !='' ) ? $_GET['p']:'index';
	include('views/'.$page.'.view.php');

//include footer
include('footer.php');		

?>
