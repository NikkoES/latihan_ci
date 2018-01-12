
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $url_asset ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $url_asset ?>css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $url_asset ?>css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo $url_asset ?>js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="login" method="POST" action="act.php">
        <input type="hidden" name="act" value="login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div style="display: none" id="error" class="alert alert-danger">
           Maaf Login gagal
        </div>
        <label for="inputEmail" class="sr-only">username</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $url_asset ?>js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="<?php echo $url_asset ?>js/jquery.min.js"></script>
    <script type="text/javascript">
      $(document ).ready(function(){
        $("#login").submit(function(){
          $.ajax({
             url : '<?php echo base_url() ?>index.php/login/aksi_login',
             type : 'post',
             data : $("#login").serialize(),
             success: function(msg){
              if(msg=='1') {
                document.location="<?php echo base_url() ?>";
              }else{
                $("#error").fadeIn(100);
                $("#error").fadeOut(3000);
              }
             }
          })
          return false;
        })
      });
    </script>
  </body>
</html>
