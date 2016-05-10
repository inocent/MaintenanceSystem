<?php
	require_once ("../../../includes/initialize.php");
	//checkAdmin();
	$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
	
	switch ($view) {
		case 'list' :
		$content    = 'list.php';		
		break;
		
		case 'add' :
		$content    = 'building.php';		
		break;
		
		case 'delete' :
		$content    = 'delete.php';		
		break;
		
		case 'edit' :
		$content    = 'edit.php';		
		break;
		
		case 'update' :
		$content    = 'update.php';		
		break;
		
		default :
		$content    = 'list.php';
		
	}
	
	require_once '../../../admin/themes/adminTemplate.php';
?>



