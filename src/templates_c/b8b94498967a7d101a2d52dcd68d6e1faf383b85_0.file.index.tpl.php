<?php
/* Smarty version 3.1.30, created on 2017-02-09 09:30:29
  from "/home/karol/Dokumenty/htdocs/src/templates/core/register/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589c28a52294f9_64155857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b94498967a7d101a2d52dcd68d6e1faf383b85' => 
    array (
      0 => '/home/karol/Dokumenty/htdocs/src/templates/core/register/index.tpl',
      1 => 1486629025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c28a52294f9_64155857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/auth/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="lib/auth/css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="/?m=createuser">
        <h2 class="form-signup-heading">Register</h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
        <br>
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="lib/auth/js/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 type="text/javascript" src="lib/auth/js/bootstrap.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="lib/auth/js/signup.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $( "#usersignup" ).validate({
          rules: {
            email: {
                email: true,
                required: true
            },
            password1: {
              required: true,
              minlength: 4
            },
            password2: {
              equalTo: "#password1"
            }
          }
        });
    <?php echo '</script'; ?>
>

  </body>
</html><?php }
}
