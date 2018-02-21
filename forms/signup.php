<?php
ini_set('display_errors', '1');
	require_once('../config.php');
	$call = new Query();

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

        <title>Sign Up</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/signup.css" rel="stylesheet">
    </head>

    <body>

        <div class="container" id="wrap">
            <div class="row">
                <div class="col-md-6" style="margin: 0 auto;">
                    <form name="registration" id="registration" accept-charset="utf-8" class="form" role="form">
                        <h3 class="form-signin-heading">
                            <center>Election Official Application</center>
                            <br>
                        </h3>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" style="margin-bottom:10px;" required /> </div>
                            <div class="col-xs-6 col-md-6">
                                <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" style="margin-bottom:10px;" required /> </div>
                        </div>

                        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Email Address" style="margin-bottom:10px;" required />
                        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" style="margin-bottom:10px;" required />
                        <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" style="margin-bottom:10px;" required />
                        <label>Birth Date</label>
                        <div class="row">
                            <div class="col-xs-4 col-md-4" style="margin-bottom:10px;">
                                <select name="month" class="form-control input-lg">
                              <option value="01">Jan</option>
                              <option value="02">Feb</option>
                              <option value="03">Mar</option>
                              <option value="04">Apr</option>
                              <option value="05">May</option>
                              <option value="06">Jun</option>
                              <option value="07">Jul</option>
                              <option value="08">Aug</option>
                              <option value="09">Sep</option>
                              <option value="10">Oct</option>
                              <option value="11">Nov</option>
                              <option value="12">Dec</option>
                            </select> </div>
                            <div class="col-xs-4 col-md-4" style="margin-bottom:10px;">
                                <select name="day" class="form-control input-lg">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select> </div>
                            <div class="col-xs-4 col-md-4">
                                <select name="year" class="form-control input-lg">
                                <option value="1935">1935</option>
                                <option value="1936">1936</option>
                                <option value="1937">1937</option>
                                <option value="1938">1938</option>
                                <option value="1939">1939</option>
                                <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                </select> </div>
                        </div>

                        <div class="form-group">
                            <label for="team">Position:</label>
                            <select class="form-control" id="team" name="team">
                          <?php echo $team_select;?>
                        </select>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" style="background-color:#007E9F; width: 20em; margin: 0 auto; margin-top:10px;">
                      Apply</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <a href="/index.php">
            <div class="return">
                Back to Homepage
            </div>
        </a>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $("#registration").submit(function(e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = "get.php"; // the script where you handle the form input.

                var toInsert = confirm("Are you sure you want to sign up?");

                console.log($("#registration").serialize());
                if (toInsert) {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#registration").serialize(), // serializes the form's elements.
                        success: function(data) {
                            alert(data); // show response from the php script.
                            //window.location.replace("./index.php");
                            // console.log(data);
			    alert("A confirmation email has been sent!");
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert("Error: " + thrownError);
                        }
                    });
                }
            });
        </script>
    </body>

    </html>
