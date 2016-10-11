<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Modify Content | About Us</title>

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
  <body id="modify-about-page">
    <div class="modify-about">
        <div class="container">
            <div class="logo">
                <img src="images/blejshqip.jpg" alt="Blej Shqip Logo">
            </div>
            <div class="modify-about-form">
            <?php  
            $host = 'localhost';
            $db = 'product';
            $user_name = 'root';
            $password = '';

            $id = $_GET['IDg'];

            $conn = new mysqli($host, $user_name, $password, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        if(isset($_POST["update"])) 
    
     {      

            $title = $_POST["title"];
            $content = $_POST["content"];
            
            $sql2="UPDATE about_us SET title = '$title', content = '$content' WHERE Id='$id'"; 

                            if ($conn->query($sql2) === TRUE) {
                                echo "Record updated successfully";
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
    }  

//define variables

    
    $title=$content= "";

$sql="SELECT Id, title, content FROM about_us Orders WHERE Id='$id'";
//$sql="SELECT product_name,$product_category,$product_image FROM compnay_add ORDER BY product_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
                <form id="modify-about-validate" method = "POST">
                  <div class="form-group">
                    <label for="about-modify-title">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value ="<?php echo $row["title"];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="about-modify-content">Content:</label>
                    <textarea class="form-control" name="content" id="content" rows="6" required><?php echo $row["content"];?></textarea>
                  </div>
                  <div class="submit-button">
                      <button type="submit" name="update" id="update" class="btn btn-primary">Modify Content</button>
                  </div>
                </form>
              <?php
                }
                        }else {
                                    echo "Nuk gjindet asnje kompani !";
                                }
                           // }
                               $conn->close();
                           // }
              ?>
            </div>
            <div class="back-homepage">
                <p><a href="about.php">← Back to About Page</a></p>
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