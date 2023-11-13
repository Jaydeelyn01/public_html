<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/log.png">
    
    
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      
      
    <title>ReserveVision</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/sb-new.css">
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><center><h1><b style="color:blue;"><img class="responsive" src="images/log.png" style="width:80px" >Reserve</b>Vision</h1></center></div>
        <div class="card-body">
         <?php session_start();
          if (isset($_GET['error'])) {
            if ($_GET["error"]=="wrongpwd") {
              echo '<p class="signuperror">Wrong password</p>';
            }
            
            } 
             
         
           ?>
          <form action="includes/signin.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="mailuid" class="form-control" placeholder="Email/Username" required autofocus="autofocus">
                <label for="inputEmail">Email/Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" >
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LdyKGgdAAAAAIjHErydLjUZd_gcZreFwgOLXUzy"></div>
            <button class="btn btn-primary btn-block" name="login-submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Signup</a>
            <a class="d-block small mt-3" href="admin/login.php">Owner Panel</a>
            <a class="d-block small mt-3" href="index.php">Home</a>
          </div>
        </div>
      </div>
    </div>

 <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
  <!-- Materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
