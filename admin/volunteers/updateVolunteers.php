<?php
ini_set('display_errors', '1');
if(!isset($_POST)){
	echo "Invalid Request.";
}else{
	require_once('../../config.php');
	$call = new Query();

	if(isset($_POST['trained']) && sizeof($_POST['trained']) > 0){
		$vT = $_POST['trained'];
		$trained = "0";
		foreach($vT as $t){ $trained .= ", " . $t; }

		$update = "UPDATE volunteer SET Training = 1 WHERE VolunID IN (". $trained .");" or die(mysql_error());
		$call::run($update);
	}

	if(isset($_POST['untrained']) && sizeof($_POST['untrained']) > 0){
		$vU = $_POST['untrained'];
		$untrained = "0";
		foreach($vU as $u){ $untrained .= ", " . $u; }

		$update = "UPDATE volunteer SET Training = 0 WHERE VolunID IN (". $untrained .");" or die(mysql_error());
		$call::run($update);	
	}



	echo "Updated volunteers.";
}