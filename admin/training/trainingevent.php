<?php
ini_set('display_errors', '1');

if(isset($_GET['eCode'])){
  $eCode = $_GET['eCode'];
}

/* DB Connect */
require_once('../../config.php');
$call = new Query();

$select = "SELECT * FROM `Testing2.0`.list_all_events WHERE TeamId = '$eCode' AND EventCode LIKE 'TR%' ORDER BY EventCode";
$eTeam = "";

$events = $call::run($select);
/* DB Connect END */
    $tbody = "<td colspan='7'><center>An event hasn't been selected.  Go back to previous page and try again.</center></td>";

    // echo gettype($events);
    if(isset($_GET) && $events){
      $tbody = "";
      $rowttl = $events->rowCount();
      $rc = 1;
      $lastEC = "";
      foreach($events as $e){      
        $eTeam = $e['TeamName'];
        
        $tbody .= "<tr>";
        $tbody .= "<td>".$e['EventCode'] ."</td>";
        $tbody .= "<td>".$e['Title'] ."</td>";
        $tbody .= "<td>".$e['Location'] ."</td>";
        $tbody .= "<td>". date_format(date_create($e['EventDate'], timezone_open("Pacific/Honolulu")),"D, F j, Y") ."</td>";
        $tbody .= "<td>". date_format(date_create($e['Starttime'], timezone_open("Pacific/Honolulu")),"g:i A")
           . " - " 
           . date_format(date_create($e['Endtime'], timezone_open("Pacific/Honolulu")),"g:i A") ."</td>";
        $tbody .= "<td>". $e['Filled'] . "/" . $e['MaxVolun'] ."</td>";
        $tbody .= "<td>". $e['AdminName'] ."</td>";
        $tbody .= "<td>"."<button class='btn btn-danger btn-sm event-delete' id='". $e['EventID'] ."' >Delete</button></td>";
        $tbody .= "</tr>";

    }
  }

?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
  
  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/table.css">

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
          <h1><?php echo $eTeam; ?> <small>Training Events</small></h1>
          <table class='table'>
            <thead><tr><th>Event</th><th>Title</th><th>Location</th><th>Date</th><th>Time</th><th>Availability</th><th>Last Editted By</th><th></th></tr></thead>
            <tbody>
            <?php
              echo $tbody;
            ?>
          </tbody>
          </table>

          <a href="./index.php" class="btn btn-primary btn-lg">
              &larr; Training</a>
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
      var cell = $(this).children('td').eq(0).html();
      // alert(cell.html());

      // window.location.replace("pollevent.php?eCode=" + cell);


    });
  </script>
  </body>
</html>
