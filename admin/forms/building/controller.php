<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;
	case 'assign' :
	doAssignsubj();
	break;
	case 'delsubj' :
	doDelsubj();
	break;
	case 'enroll' :
	doEnroll();
	break;
	case 'delsy' :
		doDelsy();
	break;

	}


	
function doInsert(){
		if (isset($_POST['save'])){
$AssetName  = $_POST['name'];
$type = $_POST['type'];
$total = $_POST['room'];


$building = new Building();
$building->building_type = $type ;
$building->total_rooms = $total;
$building->name	= $AssetName;
}

if ($AssetName  == "") {
	message('Asset Name is required!', "error");
	redirect ('index.php?page=add');
}elseif ($type == "") {
	message('Asset Type is required!', "error");
	redirect ('index.php?page=add');
}elseif ($total == "") {
	message('Total Rooms is required!', "error");
	redirect ('index.php?page=add');
}
   $building->create(); 
	message('New building addedd successfully!', "success");
	redirect('admin');	
}

?>
