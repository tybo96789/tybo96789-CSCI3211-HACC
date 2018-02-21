<?php
  /*Start session before anything*/
  session_start();
  $volunID = -1;
  if(isset($_SESSION)){
    $volunID = $_SESSION['VolunID'];
  }
  /*Session Grabber*/

  require_once('../config.php');
  $call = new Query();

  $name = "Valued Volunteer";
  $volunteer = $call::run("SELECT VolunFirst, VolunLast FROM volunteer WHERE VolunID = $volunID");
  foreach($volunteer as $v){
    $name = $v['VolunFirst'] ." ".$v['VolunLast'];
  }


  $cal_events = $call::run("SELECT * FROM list_all_volcal_events WHERE VolunID = $volunID;");
  $events = array();
  foreach($cal_events as $e){
    $ce = array();
    $ce['title'] = $e['Title'];
    $ce['start'] = $e['Start'];
    $ce['end'] = $e['End'];
    $ce['className'] = $e['Class'];

    array_push($events, $ce);
  }

  // print_r($events);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>HiVolunteer</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/fullcalendar.min.css" rel="stylesheet">
    <link href="/css/fullcalendar.print.min.css" rel="stylesheet">

    <link href="/css/calendar.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/home.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/volunteer">HiVolunteer</a>
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
                <a class="btn btn-secondary" href="/index.php" role="button">Logout</a>
            </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <h4>Polling Events</h4>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/volunteer/polling">Registered</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/volunteer/polling/pollComing.php">Upcoming</a>
            </li> 
          </ul>

           <ul class="nav nav-pills flex-column">
            <h4>Training Events</h4>
            <li class="nav-item">
              <a class="nav-link" href="/volunteer/training">Registered</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/volunteer/training/trainComing.php">Upcoming</a>
            </li> 
          
          </ul>
        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h1>Welcome <?php echo $name ?></h1>

          <div id='cal-container'>
            <div class='btn-group cal-btn-group' role='group'>
              <button id='cal-prev' class='btn btn-secondary'>&larr;Prev</button>
              <button id='cal-today' class='btn btn-secondary'>Today</button>
              <button id='cal-next' class='btn btn-secondary'>Next&rarr;</button>
            </div>
            <div id='calendar'></div>
          </div>
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

    <!-- Calendar Generator -->
<!--     <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//momentjs.com/downloads/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='/js/moment.min.js'></script>
    <script src='/js/fullcalendar.min.js'></script>

    <script type="text/javascript">
      $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            // put your options and callbacks here
          height: 'parent',
          header: {
            left: 'title',
            right: 'next'
          },
          eventLimit: true,
          events: <?php echo json_encode($events); ?>,
          eventClick: function(event, jsEvent, view) {

              alert(event.title + "\n" + event.start.format("MMMM DD, YYYY") + "\n" + event.start.format("HH:mm a") + " - " + event.end.format("HH:mm a"));

          }
        });

      });

      $('#cal-next').on('click', function(){
        $('#calendar').fullCalendar('next');
      });

      $('#cal-prev').on('click', function(){
        $('#calendar').fullCalendar('prev');
      });

      $('#cal-today').on('click', function(){
        $('#calendar').fullCalendar('today');
      });
    </script>
  </body>
</html>
