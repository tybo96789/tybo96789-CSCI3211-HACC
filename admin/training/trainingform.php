<?php
ini_set('display_errors', '1');
	require_once('../../config.php');
	$call = new Query();

	$admin_id = 1;

	/*Get existing eventcodes*/
	$eCheck = $call::run("SELECT DISTINCT EventCode FROM event WHERE EventType = 'TR';");

	$eDate_arr = array();
	foreach($eCheck as $ec){
		array_push($eDate_arr, $ec['EventCode']);
	}

	/*Create Team Dropdown*/
	$team_arr = $call::run("SELECT TeamID, TeamName FROM team;");

	$team_select = "";
	foreach($team_arr as $t){
		$team_select .= "<option value='". $t['TeamID']."'> ";
		$team_select .= $t['TeamName'] ."</option>";
	}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/home.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="../index.php">Admin</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active" style="padding-left:0.75em;">
                <a class="btn btn-secondary" href="#" role="button">Logout</a>
            </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="../volunteers">Volunteers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../team">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../polling">Polling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../training"><span class="sr-only">(current)</span>Training</a>
            </li>
          </ul>
        </nav>


        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <!--Start of PHP STUFF DISPLAYING TEAM TABLE GOES HERE-->
          <h1>Create New Training Event</h1>

			<br>
			<form id="pollEventForm" class="form" role="form">
				<h3>Event Details</h3>
				<div class="row">
				  	<div class="form-group col-sm-3">
				    	<input class="form-control" id="eType" type="text" name="eventtype" value="TR" readonly/>
				  	</div>
				  	<div class="form-group col-sm-9">
				    	<input class="form-control" id="eCode" type="text" name="eventcode" required/>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<label>Title</label>
						<input class="form-control" type="text" name="eventtitle" required/>
					</div>
				</div>


				<div class="row">
					<div class="form-group col-sm-12">
						<label>Description</label>
						<textarea class="form-control" name="eventdesc"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<label>Location</label>
						<input class="form-control" type="text" name="eventloc" required/>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<label>Event Date</label>
						<input id="eDate" class="form-control" type="date" name="eventdate" required/>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-6">
						<label>Start Time</label>
						<input class="form-control" type="time" name="eventstart" required/>
					</div>
					<div class="form-group col-sm-6">
						<label>End Time</label>
						<input class="form-control" type="time" name="eventend" required/>
					</div >
				</div>
				<br>
				<div class="row">
					<div class="form-group col-sm-6">
						<label>Position</label>
						<select id='team' class="form-control" name='team'>
							<?php echo $team_select;?>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label>Max Attendees</label>
						<input id='teamMax' class='form-control' type='number' value='1' min='1' name='teamMax'>
					</div>
				</div>
						
				<input class="form-control" type="number" name="eventadmin" value=<?php echo "'$admin_id'"; ?> hidden/>

				<div class="row">
					<div class="col-sm-4">
						<a href="./index.php" class="btn btn-primary btn-block">
							&larr; Polling</a>
					</div>
					<div class="col-sm-4">
					 	<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
					<div class="col-sm-4">
						<button type="reset" class="btn btn-primary btn-block">
						 Reset &#8634;</button>
					</div>
				</div>
			</form>
			<br>

        <!--END OF PHP STUFF-->
        </main>
      </div>
    </div>
		

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>

			$("#pollEventForm").submit(function(e) {
			    	e.preventDefault(); // avoid to execute the actual submit of the form.
			    	var url = "../insertEvent.php"; // the script where you handle the form input.

			    	/*Date and Location Checkers*/
			    	var edCheck = <?php echo json_encode($eDate_arr);?>;
			    	var eCode = $("#eCode").val();
			    	var eDate = $("#eDate").val().toString();

			    	/*Position Checkers*/
				    if(($.inArray(eCode, edCheck) > -1)){
				    	// console.log(eDate + " : " + edCheck[eCode] + " : " + $.inArray(eDate, edCheck[eCode]));
				    	alert("The event code you have chosen already exists. Please try another.");
				    }else{

				    	var toInsert = confirm("You will be creating class TR" + eCode + " for " + $('#teamMax').val() + " " + $('#team option:selected').html() + "(s).  Proceed?");

				    	console.log($("#pollEventForm").serialize());
				    	if(toInsert){
					        $.ajax({
				               type: "POST",
				               url: url,
				               data: $("#pollEventForm").serialize(), // serializes the form's elements.
				               success: function(data)
				               {
				                   alert(data); // show response from the php script.
				                   window.location.replace("./index.php");
				                   // console.log(data);
						   alert("Email has been sent to Volunteers!");
				               },
				               error: function(xhr, ajaxOptions, thrownError)
				               {
				               	   alert("Error: " + thrownError);
				               }
				        });
				    	}

			    	}	

		        	
		    });
		</script>
	</body>
</html>
