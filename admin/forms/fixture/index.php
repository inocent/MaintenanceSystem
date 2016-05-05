<?php
require_once ("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {


	    default :
		$content    = 'list.php';
				
}

require_once '../../../admin/themes/adminTemplate.php';
?>


  
