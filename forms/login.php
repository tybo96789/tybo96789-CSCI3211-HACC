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

        <form class="form-signin">
            <h3 class="form-signin-heading">
                <center>Please sign in</center>
            </h3>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
