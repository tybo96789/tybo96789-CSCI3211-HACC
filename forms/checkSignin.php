<?php
ini_set('display_errors', '1');
if(!isset($_POST)){
	echo "Invalid Request.";
}else{
	require_once('../config.php');
	$call = new Query();

	if(isset($_POST)){
		$login = $_POST['login'];
		$email = $_POST['email'];
		$pw = $_POST['password'];

		switch($login){
			case 'admin':
				$select = "SELECT AdminID FROM admin WHERE AdminEmail = '$email' AND AdminPw = '$pw';" or die(mysql_error());
				$return = "/admin";
				break;
			case 'volun':
				$select = "SELECT VolunID FROM volunteer WHERE Email = '$email' AND VolunPw = '$pw';" or die(mysql_error());
				$return = "/volunteer";
				break;
			default:
				$select = "";
		}
		
		$check = $call::run($select);

		if($check->rowCount() > 0){
			session_start();

			foreach($check as $c){
				if($login == 'admin'){
					$_SESSION['AdminID'] = $c['AdminID'];
				}else{
					$_SESSION['VolunID'] = $c['VolunID'];
				}
			}


			echo json_encode(array('status'=>'successful', 'return'=>$return));
			
		}else{
			echo json_encode(array('status'=>'unsuccessful', 'return'=>"./index.php"));;
		}
	
	}else{
		echo "You shall not PASSSSS!";
		header("Location: http://gameressence.space/");
		die();
	}
}