$(document).ready ->
  $("#submit").click ->
    username = $("#myusername").val()
    password = $("#mypassword").val()
    if (username is "") or (password is "")
      $("#message").html "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wpisz nazwę użytkownika i hasło</div>"
    else
      $.ajax
        type: "POST"
        url: "checklogin.php"
        data: "myusername=" + username + "&mypassword=" + password
        success: (html) ->
          if html is "true"
            window.location = "index.php"
          else
            $("#message").html html

        beforeSend: ->
          $("#message").html "<p class='text-center'><img src='lib/auth/images/ajax-loader.gif'></p>"

    false

