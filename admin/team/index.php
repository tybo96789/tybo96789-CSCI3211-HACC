<?php
	require_once('../../config.php');
	$call = new Query();

	$select = "SELECT * FROM team";

	$events = $call::run($select);
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
              <a class="nav-link" href="../volunteers/index.php">Volunteers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../team/index.php"><span class="sr-only">(current)</span>Teams</a>
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
          <h1>Teams</h1>

          <!--Start of PHP STUFF DISPLAYING TEAM TABLE GOES HERE-->

            <table class="table table-hover" id="event-listing">
                  <thead>
                  <tr>
                    <th>Team ID</th>
                    <th>Team Name</th>
                    <th>Team Description</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php
                foreach($events as $e){
                  echo "<tr>";
                  echo"<td>".$e['TeamID']."</td>";
                  echo"<td>".$e['TeamName']."</td>";
                  echo"<td>".$e['TeamDesc']."</td>";
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
