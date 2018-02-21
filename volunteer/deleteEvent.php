<?php
ini_set('display_errors', '1');
if(!isset($_POST['delete'])){
  echo "Invalid Request.";
}else{
  require_once('../config.php');
  $call = new Query();

  $regID = $_POST['delete'];

  $delete = "DELETE FROM registration WHERE RegID = $regID" or die(mysql_error());

  if($call::run($delete)){
    echo "You have successfully unregistered for this event.";
  }else{
    echo "You are unable to unregister for this event at this time.  Please call the office if you continue to have problems.";
  }

  
}