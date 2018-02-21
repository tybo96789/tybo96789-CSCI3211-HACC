<?php

//****** Inserting new volunteer into table ******

ini_set('display_errors', '1');
require_once('../config.php');

$call = new Query();

$VolunFirst = $_POST['firstname'];
$VolunLast = $_POST['lastname'];
$Email = $_POST['email'];
$TeamID = $_POST['team'];
$VolunPw = $_POST['password'];

$insert = "INSERT INTO `Testing2.0`.`volunteer` (`VolunID`, `VolunFirst`, `VolunLast`, `Address`, `Email`, `Phone`, `Training`, `VolunPw`, `County`, `City`, `State`, `Zip`, `TeamID`)
VALUES (NULL, '$VolunFirst', '$VolunLast', '123 Internet Street', '$Email', '555-867-5309', '0', '$VolunPw', 'Oahu', 'Honolulu', 'HI', '83910', $TeamID);";

if($call::run($insert)){
  echo "User created successfully. Welcome!";
}else{
  echo "Sorry, you cannot sign up at this time.";
}

?>
