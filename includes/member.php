<?php
	/**
		* Description:	This is a class for unit staff member.
		* Author:		Joken Villanueva
		* Date Created:	Nov. 2, 2013
		* Revised By:	Ally Bitebo
		* Date Revised  February 07, 2015
	*/
	require_once(LIB_PATH.DS.'database.php');
	class User{
		
		protected static $tbl_name = "systemuser";
		function db_fields(){
			global $mydb;
			return $mydb->getFieldsOnOneTable(self::$tbl_name);
		}
		function listOfusers(){
			global $mydb;
			$mydb->setQuery("Select * from ".self::$tbl_name);
			$cur = $mydb->loadResultList();
			return $cur;
		}
		function find_all_user($name=""){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name." 
			WHERE  `lname` ='{$name}'");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
		}
		
		static function AuthenticateUser($email="", $h_upass=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM `systemusers` WHERE `user_name`='" . $email . "' and `account_password`='" . $h_upass ."' LIMIT 1");
			//$mydb->setQuery("SELECT staff_id, dname, email, level, password FROM staffs JOIN users ON staff_id = user_id WHERE `staff_id`='" . $email . "' and `password`='" . $h_upass ."' LIMIT 1");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			if ($row_count == 1){
				$found_user = $mydb->loadSingleResult();
				$_SESSION['ACCOUNT_ID'] 	 = $found_user->user_account_id;
				$_SESSION['ACCOUNT_NAME']    = $found_user->user_first_name;
				$_SESSION['ACCOUNT_NAME']    = $found_user->user_last_name;
				$_SESSION['ACCOUNT_USERNAME']= $found_user->user_name;
				//$_SESSION['ACCOUNT_PASSWORD']= $found_user->account_password;
				$_SESSION['ACCOUNT_TYPE']    = $found_user->account_type;
				$_SESSION['BUREAU_ID']    = $found_user->bureau_id;
				return true;
				}else{
				return false;
			}	
			
		}
		
		static function AuthenticateOfficer($email="", $h_upass=""){
			global $mydb;
			$mydb->setQuery("SELECT systemusers.user_account_id,user_first_name, user_last_name,user_name,account_password,account_type FROM `systemusers` WHERE `user_name`='" . $email . "' and `account_password`='" . $h_upass ."' and `account_type`='officer' LIMIT 1");
			//$mydb->setQuery("SELECT systemusers.user_account_id,user_first_name, user_last_name,user_name,account_password,account_type, officer_id, officer_bureau_id, officer_school_id FROM `systemusers` JOIN officers ON systemusers.user_account_id = officer_user_account_id WHERE `user_name`='" . $email . "' and `account_password`='" . $h_upass ."' and `account_type`='officer' LIMIT 1");
			//$mydb->setQuery("SELECT staff_id, dname, email, level, password FROM staffs JOIN users ON staff_id = user_id WHERE `staff_id`='" . $email . "' and `password`='" . $h_upass ."' LIMIT 1");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			if ($row_count == 1){
				$found_user = $mydb->loadSingleResult();
				$_SESSION['ACCOUNT_ID'] = $found_user->user_account_id;
				$_SESSION['OFFICER_ID'] = $found_user->officer_id;
				$_SESSION['ACCOUNT_FNAME'] = $found_user->user_first_name;
				$_SESSION['ACCOUNT_LNAME'] = $found_user->user_last_name;
				$_SESSION['ACCOUNT_USERNAME']= $found_user->user_name;
				$_SESSION['ACCOUNT_TYPE']  = $found_user->account_type;
				$_SESSION['BUREAU_ID'] = $found_user->officer_bureau_id;
				$_SESSION['SCHOOL_ID']  = $found_user->officer_school_id;
				return true;
				}else{
				return false;
			}	
			
		}
		
		static function AuthenticateAdmin($email="", $h_upass=""){
			global $mydb;
			$mydb->setQuery("SELECT systemuser_password , user_name ,  user_first_name , user_middle_name FROM `systemuser` WHERE `user_name`='" . $email . "' and `systemuser_password`='" . $h_upass ."' LIMIT 1");
			
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			if ($row_count == 1){
				$found_user = $mydb->loadSingleResult();
				$_SESSION['ACCOUNT_USERNAME']= $found_user->user_name;
				$_SESSION['ACCOUNT_PASSWORD']= $found_user->systemuser_password;
				$_SESSION['ACCOUNT_FNAME']= $found_user->user_first_name;
				$_SESSION['ACCOUNT_MNAME']= $found_user->user_middle_name;
				return true;
				}else{
				return false;
			}	
			
		}
	}
		?>
		
			
	