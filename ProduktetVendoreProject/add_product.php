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
                    <li><a href="contact.php">Contact Us</a></li>
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
                <?php if(isset($_SESSION['logged_in'])){ ?>
                <li><a href="temporarily.php">Temporarily</a></li>
                <li><a href="register.php">Add Admin</a></li>
                <?php } ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>
    
    <!-- === CONTENT === -->
    <div class="content">
        <div class="container">

            <form id="company-product-form" method = "POST" enctype="multipart/form-data">
               
                <h2>Company</h2>
                <div class="contact-form">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="c-form">
                                      <div class="form-group">
                                        <label for="company_name">Name*</label>
                                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name..." required>
                                      </div>
                                      <div class="form-group">
                                        <label for="company_location">Location*</label>
                                        <input type="text" class="form-control" name="company_location" id="company_location" placeholder="Company Location..." required>
                                      </div>
                                      <div class="form-group">
                                        <label for="company_address">Address*</label>
                                        <input type="text" class="form-control" name="company_address" id="company_address" placeholder="Company Address..." required>
                                      </div>
                                      <div class="form-group">
                                        <label for="company_tel">Telephone*</label>
                                        <input type="tel" class="form-control" name="company_tel" id="company_tel" placeholder="Company Telephone..." required>
                                      </div>
                                      <div class="form-group">
                                        <label for="company_email">Email*</label>
                                        <input type="email" class="form-control" name="company_email" id="company_email" placeholder="Company Email..." required>
                                      </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="contact-info company-info">
                                    <div class="form-group">
                                    <label for="company_subject">Subject*</label>
                                    <input type="text" class="form-control" name="company_subject" id="company_subject" placeholder="Company Subject..." required>
                                  </div>
                                  <div class="form-group">
                                    <label for="company_info">Info*</label>
                                    <textarea class="form-control" id="company_info" name="company_info" rows="3" placeholder="Company Info..." required></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="company_image">Company Image: </label>
                                    <input type="file" id="company_image" name="company_image" accept="image/*" required>
                                    <p class="help-block">Upload company image.</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.contact-form -->

                    <h2>Product</h2>
             <div class="contact-form">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="c-form">
                                      <div class="form-group">
                                        <label for="product_name">Name*</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name..." required>
                                      </div>
                                      <div class="form-group">
                                        <label for="product_id">Barcode*</label>
                                        <input type="text" class="form-control" name="product_id" id="product_id" placeholder="Product Barcode..." required>
                                      </div>
                                      <div class="form-group">
                                        <label for="product_category">Category*</label>
                                        <input type="text" class="form-control" name="product_category" id="product_category" placeholder="Product Category..." required>
                                      </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="contact-info company-info">
                                  <div class="form-group">
                                    <label for="product_info">Info*</label>
                                    <textarea class="form-control" id="product_info" name="product_info" rows="3" placeholder="Product Info..." required></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="price">Price* </label>
                                  <input type="number" step="0.01" class = "form-control" id="price" name="price" placeholder="price..." required>
                                  </div>
                                  <div class="form-group">
                                    <label for="product_image">Product Image: </label>
                                    <input type="file" id="product_image" name="product_image" accept="image/*" required>
                                    <p class="help-block">Upload product image.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="c-form">
                                    <button type="submit" name="company_product_send" id="company_product_send" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.contact-form -->
<?php
$host = 'localhost';
$db = 'product';
$user_name = 'root';
$password = '';


// Create connection
$conn = new mysqli($host, $user_name, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//define variables

   // $company_name=$company_location=$company_address=$company_tel=$company_email=$company_subject=$company_info=$company_info=$company_image = "";
   // $product_name=$product_id=$product_category=$product_info=$product_image = "";

    


if(isset($_POST["company_product_send"])) 
    
{      
    //    $folder="uploads/";

        $company_name = $_POST["company_name"];
        $company_location = $_POST["company_location"];
        $company_address = $_POST["company_address"];
        $company_tel = $_POST["company_tel"];
        $company_email = $_POST["company_email"];
        $company_subject = $_POST["company_subject"];
        $company_info = $_POST["company_info"];   
        
        $company_image = $_FILES["company_image"]["name"];
   //     $company_image_loc = $_FILES["company_image"]["tmp_name"];
   //     $company_image_size = $_FILES["company_image"]["size"];
    //    $company_image_type = $_FILES["company_image"]["type"];
        //move_uploaded_file($company_image_loc, $folder.$company_image);
       
        $product_name = $_POST["product_name"];
        $product_id = $_POST["product_id"];
        $product_category = $_POST["product_category"];
        $product_info = $_POST["product_info"];
        $price = $_POST["price"];
        
        $product_image = $_FILES["product_image"]["name"];
 //       $product_image_loc = $_FILES["product_image"]["tmp_name"];
 //       $product_image_size = $_FILES["product_image"]["size"];
 //       $product_image_type = $_FILES["product_image"]["type"];
       // move_uploaded_file($company_image_loc, "$folder.$company_image" && $product_image_loc, "$folder.$product_image");
       //(move_uploaded_file($company_image_loc, "uploads/".$company_image && $product_image_loc, "uploads/".$product_image));
        


$sql = "INSERT INTO company(company_name,company_location,company_address,company_tel,company_email,company_subject,company_info,company_image, product_name,product_id,product_category,product_info,price,product_image) VALUES ('$company_name','$company_location','$company_address','$company_tel','$company_email','$company_subject','$company_info','$company_image','$product_name','$product_id','$product_category','$product_info','$price','$product_image')";


    if ($conn->query($sql) === TRUE) {
                echo "Kompania me te dhenat perkatese u ruajte me sukses ! ";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
           }

       $conn->close();
        }

?>
                </form><!-- /#company-product-form -->
        
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