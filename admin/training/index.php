<?php
require_once('../../config.php');
$call = new Query();

$select = "SELECT * FROM list_unique_tr_events";

$events = $call::run($select);

 // print_r($events);

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
                <a class="btn btn-secondary" href="http://gameressence.space/index.php" role="button">Logout</a>
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
          <h1>Training by Position</h1>

          <table class="table table-hover" id="event-listing">
            <thead>
            <tr>
              <!-- <th>Event Code</th> -->
              <th>Position</th>
              <th>Available Classes</th>
              <th>Spots Filled</th>
              <th>Spots Available</th>
            </tr>
            </thead>
            <tbody>
            <?php
              foreach($events as $e){
              //  // print_r($e);
                echo "<tr id='". $e['PosID'] ."'>";
                echo "<td>". $e['Pos'] ."</td>";
                echo "<td>". $e['ClassAmt'] ."</td>";
                echo "<td>".  $e['Filled'] ."</td>";
                echo "<td>". $e['MaxVolun'] ."</td>";
                echo"</tr>";
              }
            ?>
            </tbody>
          </table>

          <a class="btn btn-lg btn-primary btn-block signup-btn" href="./trainingform.php" role="button">Create New Event</a>

        <!--END OF PHP STUFF-->
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    	$("#event-listing tbody tr").on("click", function(){
    		var cell = $(this).attr('id');
    		// alert(cell.html());

  	    window.location.href = "trainingevent.php?eCode=" + cell;

    	});
    </script>
  </body>
</html>
