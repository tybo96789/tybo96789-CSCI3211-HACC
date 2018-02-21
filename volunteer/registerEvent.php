<?php
ini_set('display_errors', '1');
if(!isset($_POST)){
  echo "Invalid Request.";
}else{
  require_once('../config.php');
  $call = new Query();

  $eventID = $_POST['eventID'];
  $volunID = $_POST['volunID'];
  $teamID = $_POST['teamID'];
  $title = $_POST['eventTitle'];

  $insert = "INSERT INTO registration (EventID, VolunID, TeamID) VALUES ($eventID, $volunID, $teamID)" or die(mysql_error());

  if($call::run($insert)){
    echo "You have successfully registered for: $title";
  }else{
    echo "You are unable to register for this event at this time";
  }

  
}