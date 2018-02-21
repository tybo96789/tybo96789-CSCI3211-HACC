<?php
	
require_once('../../config.php');
	
$call = new Query();

	
$select = "SELECT * FROM volunteer ORDER BY VolunLast, VolunFirst";

	
$volunteer = $call::run($select);
  // print_r($volunteer);
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
              <a class="nav-link active" href="../volunteers/index.php"><span class="sr-only">(current)</span>Volunteers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../team/index.php">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../polling/index.php">Polling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../training/index.php">Training</a>
            </li>
          </ul>
        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h1>Volunteers <button id='volunUpdate' class='btn btn-primary'>Update</button></h1>

          <!--Start of PHP STUFF DISPLAYING TEAM TABLE GOES HERE-->

            <table class="table table-hover" id="event-listing">
                  <thead>
                  <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Email</th>
                    <th>TeamID</th>
                    <th>Training?</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php
                  foreach($volunteer as $v){
                    echo "<tr>";
                    echo"<td>".$v['VolunLast']."</td>";
                    echo"<td>".$v['VolunFirst']."</td>";
                    echo"<td>".$v['Address']."</td>";
                    echo"<td>".$v['City']."</td>";
                    echo"<td>".$v['State']."</td>";
                    echo"<td>".$v['Zip']."</td>";
                    echo"<td>".$v['Email']."</td>";
                    echo"<td>".$v['TeamID']."</td>";

                    echo"<td><input type='checkbox' value='".$v['VolunID']."' ";
                    if($v['Training'] > 0){
                      echo "checked='checked'";
                    }
                      echo "></td>";
                    echo "</tr>";
                  }
                ?>
            </tbody>
              </table>

        <!--END OF PHP STUFF-->
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script>

        $('#volunUpdate').on('click', function(e){
          e.preventDefault();

          var trained = [];
           $('input:checkbox:checked').each(function() {
             trained.push($(this).val());
           });

           var untrained = []
            $('input:checkbox:not(:checked)').each(function() {
             untrained.push($(this).val());
           });

          var toUpdate = confirm("Are you sure you want to update volunteer training statuses?");

          if(toUpdate){
              $.ajax({
                   type: "POST",
                   url: './updateVolunteers.php',
                   data: {
                    trained: trained,
                    untrained: untrained
                   }, // serializes the form's elements.
                   success: function(data)
                   {
                       alert(data); // show response from the php script.
                       window.location.replace("./index.php");
                       // console.log(data);
                   },
                   error: function(xhr, ajaxOptions, thrownError)
                   {
                       alert("Error: " + thrownError);
                   }
            });
          }
        });

    </script>

  </body>
</html>
