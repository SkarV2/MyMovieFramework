<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: /");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/auth/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="lib/auth/css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="/?m=checklogin">
        <h2 class="form-signin-heading">Zaloguj się</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="lib/auth/js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="lib/auth/js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="lib/auth/js/login.js"></script>

  </body>
</html>