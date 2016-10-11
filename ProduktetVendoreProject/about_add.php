<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add Content | About Us</title>

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
  <body id="add-about-page">
    <div class="add-about">
        <div class="container">
            <div class="logo">
                <img src="images/blejshqip.jpg" alt="Blej Shqip Logo">
            </div>
            <div class="add-about-form">
			<?php
    $host = 'localhost';
    $db = 'product';
    $user_name = 'root';
    $password = '';

    $conn = new mysqli($host, $user_name, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
				if(isset($_POST['submitAbout'])){
						$Title = $_POST['about-add-title'];
						$Content = $_POST['about-add-content'];
						$sql = "INSERT INTO about_us (Title, Content ) VALUES('$Title', '$Content')";
						if ($conn->query($sql) === TRUE) {
                echo "Te dhenat u insertuan me sukses !";
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
           }
          	header('Location: aboutAdmin.php');
			}
			?>
                <form id="add-about-validate" action="about_add.php" method="post">
                  <div class="form-group">
                    <label for="about-add-title">Title:</label>
					<input type = "hidden" id="about-modify-id" name="about-modify-id" value = "<?php echo $row['ID']; ?>"/>
                    <input type="text" class="form-control" name="about-add-title" id="about-add-title" value="" placeholder="" required/>
                  </div>
                  <div class="form-group">
                    <label for="about-add-content">Content:</label>
                    <textarea class="form-control" name="about-add-content" id="about-add-content" rows="6" required></textarea>
                  </div>
                  <div class="submit-button">
                      <input type="submit" id="submitAbout" name="submitAbout"class="btn btn-primary" value="Add Content"/>
                  </div>
                </form>
            </div>
					  
            <div class="back-homepage">
                <p><a href="aboutAdmin.php">← Back to About Page</a></p>
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