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
    <title>Products</title>

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
                <li class="active"><a href="products.php">Products</a></li>
                <li><a href="companies.php">Companies</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="add_product.php">Add Product</a></li>
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
            <div class="quick-link clearfix">
                <p>Go quickly to &nbsp;&nbsp;<img src="images/mini-arrow.png" alt="Arrow right"></p>
                <ul id = "cats">
				
                    <li><a href="#">Mobiles</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Tablets</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Clothes</a></li>
                    <li><a href="#">Computers</a></li>
                    <li><a href="#">Food</a></li> 
				
                </ul>
            </div><!-- /.quick-link -->
            <h2>Products</h2>
            <div class="companies products">

                <table id="table-products" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                        </tr>
                    </tfoot>
                    <tbody>
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

//define variables

    
    $product_name=$product_category=$product_image = "";

$sql="SELECT ID, product_name, product_category, product_image, product_id, price FROM company_add";
//$sql="SELECT product_name,$product_category,$product_image FROM compnay_add ORDER BY product_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $product_name=$row['product_name'];
        $product_category=$row['product_category'];
        //$product_image=$row['product_image'];
        
     /**   if(isset($_SESSION['logged_in']))
            { 
                echo"<tr>";
     
            echo"<td>".
                 "<a href=\"modify_product.php?IDp=".$row['ID']."\">"; ?>
                 <img src="repository/images/<?php echo $row["product_image"]; ?>" alt="Facebook Image"> 
        <!--        <img src="repository/images/article-img1.png" alt="Product Image">  -->
        <?php
            echo "</a>".
            "</td>";

 
            echo "<td>"."<a href=\"modify_product.php?IDp=".$row['ID']."\">$product_name</a>"."</td>".
            "<td>"."<a href=\"modify_product.php?IDp=".$row['ID']."\">$product_category</a>"."</td>".
            "</tr>";
            }  */
        
            echo"<tr>";
                 
            echo"<td>".
                     "<a href=\"product.php?IDp=".$row['ID']."\">"; ?>
                     <img src="repository/images/<?php echo $row["product_image"]; ?>" alt="Facebook Image"> 
            <!--        <img src="repository/images/article-img1.png" alt="Product Image">  -->
            <?php
                    echo "</a>".
                        "</td>";

             
               echo "<td>"."<a href=\"product.php?IDp=".$row['ID']."\">$product_name</a>"."</td>".
                    "<td>"."<a href=\"product.php?IDp=".$row['ID']."\">$product_category</a>"."</td>".
                    "</tr>";
        
                

    //selektimi i fotografise ?????

    //<tr>
                          /**  <td>
                                <a href="#">
                                    <img src="repository/images/article-img1.png" alt="Product Image">
                                </a>
                            </td>
                            <td><a href="#">Popkek</a></td>
                            <td><a href="#">Qokollad</a></td>
                        </tr>*/
}
}
else {
    echo "Nuk gjindet asnje produkt ne databaze !";
}
$conn->close();
?>

                    </tbody>
                </table>
            </div><!-- /.companies -->
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