<?php
//session_start();
include 'login.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="login-page">
    <div class="login">
        <div class="container">
            <div class="logo">
                <img src="images/blejshqip.jpg" alt="Blej Shqip Logo">
            </div>
            <div class="login-form">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="">
                  </div>
                  <div class="submit-button">
				          <?php if(isset($_SESSION['errorLogin'])){ echo '<span class="alert">'.$_SESSION['errorLogin'].'</span>';} ?>
                      <input type="submit" id="loginSubmit" name="loginSubmit" class="btn btn-primary" value="Login" />

					  <br />
					  <br />
					  
                  </div>
                  <span><?php echo $error; ?></span>
                </form>
            </div>
            <div class="back-homepage">
                <p><a href="index.php">← Back to Produktet Vendore</a></p>
            </div>
        </div>
    </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- JQuery Validate -->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
  </body>
</html>