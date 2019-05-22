<?php
	// Sign in form and processing
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


	<title>PhotoSite - Sign In</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap.cyborg.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
                <br /><br />
                <div class="well">
                    <form class="form-signin" action="login.php">
                        <h2 class="form-signin-heading text-center">Please Login</h2>
                        <br />
                        <label for="inputUsername" class="sr-only">Username : </label>
                        <input name="inputUsername" type="text" class="form-control" placeholder="Username" required autofocus autocomplete="off" />
                        <br />
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input name="inputPassword" type="password" class="form-control" placeholder="Password" required="" autocomplete="off" />
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    </form>
                    <br />
                    <br />
                    <p class="text-center">
                        Don't have an account?<br />
                        <a href="signup.php" class="btn btn-success btn-block">Sign up here!</a>
                    </p>
                </div>

            </div>

		</div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <img src="images/instamatic.svg" id="instamatic" class="img-responsive"/>
            </div>
        </div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

