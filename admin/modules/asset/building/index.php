<?php
require_once("../../../../includes/initialize.php");
	//$content='home.php';
	$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	switch ($view) {
	
		case '1' :
	    $title=$_GET['calendar'];	
		$content = 'calendar.php';		
		break;
		case '2' :
	    //$title=$_GET['calendar'];	
		$content = 'list.php';		
		break;
}
require_once '../../../admin/themes/frontTemplate.php';
?>
