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
$Name  = $_POST['name'];
$type = $_POST['type'];
$total_rooms = $_POST['room'];
$empty_rooms = $_POST['eroom'];
$occupied_rooms = $_POST['oroom'];
$region = $_POST['region'];
$campus = $_POST['campus'];
$status = $_POST['status'];


$building = new Building();
$building->building_type = $type ;
$building->total_rooms = $total_rooms;
$building->empty_rooms = $empty_rooms;
$building->occupied_rooms = $occupied_rooms;
$building->name	= $Name;
$building->Region	= $region;
$building->campus	= $campus;
$building->status	= $status;
}
/*

if ($AssetName  == "") {
	message('Asset Name is required!', "error");
	redirect ('index.php?page=add');
}elseif ($type == "") {
	message('Asset Type is required!', "error");
	redirect ('index.php?page=add');
}elseif ($total == "") {
	message('Total Rooms is required!', "error");
	redirect ('index.php?page=add');
}*/

   $building->create(); 
	message('New building addedd successfully!', "success");
	redirect('../../index.php?page=2');	
}

?>
