<?php 
require_once ("../includes/initialize.php");
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
$firstName  = $_POST['firstname'];
$lastName  = $_POST['lastname'];
$middleName  = $_POST['middlename'];
$username  = $_POST['username'];
$gender  = $_POST['gender'];
$department  = $_POST['department'];
$title  = $_POST['title'];
$password = $_POST['password'];

echo $firstName ;
echo $middleName ;

$user = new User();
$user->user_first_name = $firstName;
$user->user_middle_name = $middleName;
$user->user_last_name = $lastName;
$user->user_gender = $gender;
$user->user_depart_id = $department;
$user->user_type= $title;
$user->user_password = $password;
print_r($user);
  $user->create(); 
	message('New User addedd successfully!', "success");
	redirect('index.php');
}
/*
if ($AssetName  == "") {
	message('Asset Name is required!', "error");
	redirect ('index.php');
}elseif ($type == "") {
	message('Asset Type is required!', "error");
	redirect ('index.php');
}elseif ($total == "") {
	message('Total Rooms is required!', "error");
	redirect ('index.php');
}*/
 	
}
?>
