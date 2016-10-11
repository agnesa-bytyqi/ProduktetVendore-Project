<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add Company & Product</title>

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
  <body>
    <!-- === HEADER === -->
    <header>
        <div class="support">
            <div class="container">
                <p>Contact & Support :</p>
                <ul>
                    <li><a href="tel:044111999">+1800 1234 5678</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="help.php">Help</a></li>
                </ul>
            </div>
        </div><!-- /.support -->
        <div class="logo-search-account">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="logo">
                            <h1>mo<span class="font-style">Cart</span></h1>
                            <p>Powered by <a href="#"><span class="yellow">mangupat.al</span></a></p>
                        </div>
                    </div><!-- /.logo -->
                    <div class="col-md-5 col-sm-4">
                        <div class="search">
                            <form class="search-form clearfix" role="search">
                                <div class="form-group">
                                  <input type="search" class="form-control" placeholder="Search..."> <!-- type="text" -->
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </form>
                        </div>
                    </div><!-- /.search -->
                    <div class="col-md-4 col-sm-4">
                        <div class="account">
                            <div class="row">
                                <div class="col-sm-3 col-xs-3">
                                    <div class="icon">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </a>
                                    </div>
                                    <p><a href="#">account</a></p>
                                </div>
                                <?php
                                     if(!isset($_SESSION['logged_in'])) {?>
                               <div class="col-sm-3 col-xs-3">
                                    <div class="icon">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-arrow-up"></i>
                                        </a>
                                    </div>
                                    <p><a href="adminLogin.php">Login</a></p>
                                </div>
                                <?php
                                }else{ ?> 
                                <div class="col-sm-3 col-xs-3">
                                    <div class="icon">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-arrow-down"></i>
                                        </a>
                                    </div>
                                    <p><a href="logout.php">Logout</a></p>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="icon">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-home"></i>
                                        </a>
                                    </div>
                                    <p><a href="register.php">Register</a></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.logo-search-account -->
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="companies.php">Companies</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="active"><a href="add_product.php">Add Product</a></li>
                <li><a href="register.php">Add Admin</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>
    
    <!-- === CONTENT === -->
    <div class="content">
        <div class="container">
            <div class="blej-shqip">
                <img src="images/blejshqip.jpg" alt="Bleje Shqip Image">
                
                <div class="about-buttons">
           <!--         <a href="about_add.html" class="btn btn-info">add</a>
                    <a href="about_modify.html" class="btn btn-info">modify</a>-->
                </div><!-- /.about-buttons -->    
            </div>
            <?php  
            $host = 'localhost';
            $db = 'product';
            $user_name = 'root';
            $password = '';

            $id = $_GET['IDp'];

            $conn = new mysqli($host, $user_name, $password, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        if(isset($_POST["update"])) 
    
     {      
         //   $folder="uploads/";

            $product_name = $_POST["product_name"];
            $product_id = $_POST["product_id"];
            $product_category = $_POST["product_category"];
            $product_info = $_POST["product_info"];
            $price = $_POST["price"];
            
            $product_image = $_FILES["product_image"]["name"];
     //       $product_image_loc = $_FILES["product_image"]["tmp_name"];
      //      $product_image_size = $_FILES["product_image"]["size"];
     //       $product_image_type = $_FILES["product_image"]["type"];
            //move_uploaded_file($product_image_loc, "$folder.$product_image");

            $sql2="UPDATE company_add SET product_name = '$product_name', product_id = '$product_id', product_category = '$product_category', product_info='$product_info', price = '$price', product_image = '$product_image' WHERE ID='$id'"; 

                            if ($conn->query($sql2) === TRUE) {
                                echo "Record updated successfully";
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
    }  

//define variables

    
    $product_name=$product_category=$product_info=$product_image = "";

$sql="SELECT ID, product_name, product_category, product_info, product_image, product_id, price FROM company_add Orders WHERE ID='$id'";
//$sql="SELECT product_name,$product_category,$product_image FROM compnay_add ORDER BY product_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
            <form id="company-product-form" method = "POST" enctype="multipart/form-data">
                <h2>Product</h2>
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="c-form">
                                      <div class="form-group">
                                        <label for="product_name">Name*</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" value ="<?php echo $row["product_name"];?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="product_id">Barcode*</label>
                                        <input type="text" class="form-control" name="product_id" id="product_id" value ="<?php echo $row["product_id"];?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="product_category">Category*</label>
                                        <input type="text" class="form-control" name="product_category" id="product_category" value ="<?php echo $row["product_category"];?>" required>
                                      </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="contact-info company-info">
                                  <div class="form-group">
                                    <label for="product_info">Info*</label>
                                    <textarea class="form-control" id="product_info" name="product_info" rows="3" required=""><?php echo $row["product_info"];?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="price">Price* </label>
                                  <input type="number" step="0.01" class = "form-control" id="price" name="price"value ="<?php echo $row["price"];?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="product_image">Product Image: </label>
                        <!--            <input type="file" id="product_image" name="product_image" accept="image/*" required> -->
                        <input type="file" id="product_image" name="product_image" accept ="<?php echo $row["product_image"];?>/*" required>
                                    <p class="help-block">Upload product image.</p>
                                  </div>
        

                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="c-form">
                                <button type="submit" name="update" id="update" class="btn btn-default">Modify</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.contact-form -->

                    <!-- /.contact-form -->
                
                </form><!-- /#company-product-form -->
                <?php
                    }
                        }else {
                                    echo "Nuk gjindet asnje kompani !";
                                }
                           // }
                               $conn->close();
                           // }

                ?>
                
                <div class="brands">
                    <div id="brands">
                      <div class="item"><img src="repository/images/brand1.jpg" alt="Brand Image"></div>
                      <div class="item"><img src="repository/images/brand2.png" alt="Brand Image"></div>
                      <div class="item"><img src="repository/images/brand3.jpg" alt="Brand Image"></div>
                      <div class="item"><img src="repository/images/brand4.png" alt="Brand Image"></div>
                      <div class="item"><img src="repository/images/brand5.png" alt="Brand Image"></div>
                      <div class="item"><img src="repository/images/brand6.jpg" alt="Brand Image"></div>
                    </div>
                </div><!-- /.brands -->
            </div>
            
            
        </div><!-- /.container -->
    </div>

    <!-- === FOOTER === -->
    <footer>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h3>Help</h3>
                        <ul>
                            <li><a href="#">Contact Customer Service</a></li>
                            <li><a href="#">ScoreCard</a></li>
                            <li><a href="#">Product Availability</a></li>
                            <li><a href="#">Recalls</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Shipping Rates</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Affiliate Programd</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Gift Shops</a></li>
                            <li><a href="#">Group Sales</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Return policy</a></li>
                            <li><a href="#">Suppliers</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Follow Us:</h3>
                        <p>If you have questions about your order or need any general information our customer service team will be happy to assist you.</p>
                        <div class="social-medias">
                            <a href="#" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="btn btn-social-icon btn-google"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p>Copyright &copy; 2015 <strong>mangupat</strong>. All rights reserved.</p>
            </div>
        </div>
    </footer>
   
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