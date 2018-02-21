<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Election Officials</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Office of Elections</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active" style="padding-right:0.5em;">
                    <a class="btn btn-secondary" href="forms/signup.php" role="button">Sign Up</a>
                </li>
                <li class="nav-item active" style="p">
                    <a class="btn btn-secondary" href="forms/" role="button">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="starter-template">
            <h2>Volunteer: Become an Election Official</h2>
            <hr>
            <p>Election Day Officials are recruited to assist voters, provide operational support, and ensure the integrity of the voting process. <br>Volunteers gain first-hand knowledge and experience in the electoral process while receiving a stipend. Work hours vary by position.</p>
            <br>

            <div class="row">
                <div class="col-md-4" style="text-align:left;">
                    <h4>
                        <center><u>Qualifications</u></center>
                    </h4>
                    <ul>
                        <li>At least 16 years of age on or before June 30 of the election year.</li>
                        <li>A registered or pre-registered voter in the State of Hawaii.</li>
                        <li>Able to read and write English.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4><u>Election Dates</u></h4>
                    <strong>Primary Election:</strong> August 11, 2018
                    <br><strong>General Election:</strong> November 6, 2018
                    <p>Polls are open from 7:00 am to 6:00 pm. Work hours vary by position.</p>
                </div>
                <div class="col-md-4">
                    <h4><u>Apply</u></h4>
                    <p>Call your local election office for more information or Sign Up online.

                        <br>Hawaii: 933-1591
                        <br>Maui: 270-7749
                        <br>Kauai: 241-4800
                        <br>Honolulu: 453-8683
                    </p>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-6" style="text-align:left">
                    <center>
                        <h4>
                            <center><u>Restrictions</u></center>
                        </h4>
                    </center>
                    <p>No parent, spouse, reciprocal beneficiary, child, or sibling of a candidate may serve as a precinct official in any precinct where votes may be cast for the candidate.</p>
                    <p>No candidate for elective office may serve as a precinct official in the same election in which the person is a candidate.</p>
                    <p>No candidate who failed to be nominated in the primary or special primary election may serve as a precinct official in the following general election.</p>
                </div>

                <div class="col-lg-6" style="text-align:left">
                    <center>
                        <h4>
                            <center><u>Fundraising Opportunity</u></center>
                        </h4>
                    </center>
                    <p>Nonprofit organizations may volunteer as Election Day Officials as a fundraiser. Each organization must provide a tax clearance certificate, memorandum of agreement, and a list of volunteers who have agreed to donate their stipend.</p>
                    <p>No political action committees or groups organized for political purposes may participate.</p>
                </div>
            </div>


            <center>
                <h4 id="position"><u>Positions</u></h4>
            </center>

            <div class="panel-group" id="accordion" style="text-align:left; margin: 0 auto; width: 40em;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <center>Control Center Operator</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Responds to telephone inquiries and request from polling places using a computer-based call center system. Duties include entering information, determining solutions, and resolving problems.
                            <br><br>Stipend: $85</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <center>Counting Center Official</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                Processes, tabulates, and disseminates election results in an accurate and timely manner. Consist of nine (9) teams.
                                <p>Stipend: $85-95
                                    <p>
                                        <ul>
                                            <li>Absentee Ballot Team: Prepares mail ballots for final processing and tabulation.</li>
                                            <li>Ballot Storage Team: Inventories, organizes, stores, and secures all ballots.</li>
                                            <li>Computer Operations Team: Controls and inventories the tabulation of ballots.</li>
                                            <li>Duplication Team: Generates one-for-one duplicates of damaged ballots that are unable to be processed through the central scanner.</li>
                                            <li>Manual Audit Team: Audits voted ballots to ensure the security and integrity of the vote counting system.</li>
                                            <li>Official Observer Team: Serves as the “eyes and ears” of the general public to ensure the security and integrity of the vote counting system.</li>
                                            <li>Poll Book Audit Team: Verifies turnout matches the computer generated results. Audits the poll books to ensure the security and integrity of the vote counting system.</li>
                                            <li>Precinct Can Team: Receives, inventories, and distributes election related supplies in the precinct cans to various individuals and teams.</li>
                                            <li>Receiving Team: Accepts custody of voted ballots, precinct cans, and voting equipment at the counting center.</li>
                                        </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <center>Delivery/Collection Official</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Delivers ballots and election supplies to the polling places on election morning. Collects voted ballots and election supplies after the polls have closed on election day. Each team consist of two members</p>
                            <p>Stipend: $50 – $95
                                <p>
                                    <ul>
                                        <li>Chair: Coordinates and directs the activities of the D/C Team. Completes documentation and certifies the sealing of the election supplies.</li>
                                        <li>Member: Assist the Chair and witnesses the transfer of custody of ballots and election supplies</li>
                                    </ul>
                                </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                <center>Election Information Services Official</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Responds to general inquiries from the public and forwards special circumstances to appropriate officials.</p>
                            <p>Stipend: $85</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                <center>Facility Official</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Sets up election equipment at polling places on election eve. Provides access to polling places on election day. Disassembles and stores the election equipment after the polls close on election day.</p>
                            <p>Stipend: $60 - $140</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                <center>Precinct Official</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Assist voters at the polling place while ensuring the integrity of the voting process. Precinct Officials operate the Information and Ballot Demonstration Station, Poll Book Station, Ballot Box Station, and eSlate Station.</p>
                            <p>Stipend: $5 - $175</p>
                            <p>Additional positions include:</p>
                            <ul>
                                <li>Precinct Chairperson: Manages the polling place and is responsible for the security and integrity of ballots issued and votes cast.</li>
                                <li>Voter Assistance Official: Assist the chairperson in managing the polling place. Operates the Voter Assistance Station. Assist voters and administers special procedures.</li>
                                <li>Standby Precinct Official: Reports to election headquarters on election morning for dispatch to a polling place that requires additional staffing.</li>
                                <li>Alternate Election Officials: Stands-by at home on election morning for dispatch to a polling place that requires additional staffing.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                <center>Precinct Troubleshooter</center>
                            </a>
                        </h5>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Monitors the polling places to ensure Officials are following standard operating procedures; and replenishes supplies as necessary. Must have a valid driver’s license.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--End accordian-->
        </div>
        <!--End Template-->
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
