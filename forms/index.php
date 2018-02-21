<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/login.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <form class="form-signin" id='form-signin'>
            <h3 class="form-signin-heading">
                <center>Please sign in</center>
                <input type="hidden" value="volun" name="login">
            </h3>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:#007E9F;">Sign in</button>
                </div>
                <div class="col-sm-6">
                    <a class='btn btn-default btn-block btn-lg' href='./adminlogin.php'>Admin?</a>
                </div>
            </div>
        </form>

        <a href="/index.php" class='btn btn-default btn-block'>Back to Homepage</a>

    </div>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $('#form-signin').submit(function(e){
          e.preventDefault();
          
          console.log($('#form-signin').serialize());

              $.ajax({
                   type: "POST",
                   url: './checkSignin.php',
                   data: $('#form-signin').serialize(), // serializes the form's elements.
                   success: function(json)
                   {
                        var data = $.parseJSON(json);

                        // console.log("json: " + json);
                        // console.log("data: " + data);
                        
                        alert('Your login was ' + data['status']); // show response from the php script.
                        window.location.replace(data['return']);
                       console.log(data);
                   },
                   error: function(xhr, ajaxOptions, thrownError)
                   {
                       alert("Error: " + thrownError);
                   }
            });
        });
    </script>

</body>

</html>
