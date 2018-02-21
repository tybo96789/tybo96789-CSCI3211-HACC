<?php
ini_set('display_errors', '1');
if(!isset($_POST)){
	echo "Invalid Request.";
}else{
	require_once('../config.php');
	$call = new Query();

	$eType = $_POST['eventtype'];
	$eCode = $_POST['eventcode'];
	$eTitle = $_POST['eventtitle'];
	$eDesc = $_POST['eventdesc'];
	$eTitle = $_POST['eventtitle'];
	$eLoc = $_POST['eventloc'];
	$eDate = $_POST['eventdate'];
	$eStart = $_POST['eventstart'];
	$eEnd = $_POST['eventend'];
	$eAdmin = $_POST['eventadmin'];
	$eTeam = $_POST['team'];
	$eTMax = $_POST['teamMax'];

	// $insert = "INSERT INTO `Testing2.0`.`event` (`ElectionID`, `EventCode`, `EventType`, `Title`, `Description`, `Location`, `EventDate`, `Starttime`, `Endtime`, `TeamID`, `MaxVolun`, `AdminID`,) VALUES ('50', '$eCode', '$eType', '$eTitle', '$eDesc', '$eLoc', '$eDate', '$eStart', '$eEnd', '1','45', '$eAdmin')" or die(mysql_error());
	if(is_array($eTeam)){
		foreach ($eTeam as $a=>$b){
			//echo $a . " : " . $b . " : " . array_key_exists($a, $eTMax);
			if(array_key_exists($a, $eTMax)){
				$insert = "INSERT INTO `Testing2.0`.`event` (`ElectionID`, `EventCode`, `EventType`, `Title`, `Description`, `Location`, `EventDate`, `Starttime`, `Endtime`, `TeamID`, `MaxVolun`, `AdminID`) VALUES ('50', '$eCode', '$eType', '$eTitle', '$eDesc', '$eLoc', '$eDate', '$eStart', '$eEnd', '$b','" . $eTMax[$a] . "', '$eAdmin')" or die(mysql_error());

				$call::run($insert);
				// echo $insert;
			}
		}
	}else{
		$insert = "INSERT INTO `Testing2.0`.`event` (`ElectionID`, `EventCode`, `EventType`, `Title`, `Description`, `Location`, `EventDate`, `Starttime`, `Endtime`, `TeamID`, `MaxVolun`, `AdminID`) VALUES ('50', '$eCode', '$eType', '$eTitle', '$eDesc', '$eLoc', '$eDate', '$eStart', '$eEnd', '$eTeam', '$eTMax' , '$eAdmin')" or die(mysql_error());

		$call::run($insert);
	}


	echo "Inserted " . count($eTeam) . " events.";
}