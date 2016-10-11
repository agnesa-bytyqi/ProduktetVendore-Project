<?php
			
$host = 'localhost';
$db = 'product';
$user_name = 'root';
$password = '';

$id = $_GET['IDp'];
// echo $id;
// Create connection
$conn = new mysqli($host, $user_name, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
		
		

		//Fetch product data
		//$ID=$_GET['ID'];

		//Create and run the SQL.
		$sql = "INSERT INTO 
		company_add(company_name, company_location, company_address, company_tel,
		 company_email, company_subject, company_info, company_image, product_name, product_id, product_category, product_info, price, product_image) SELECT company_name,company_location,company_address, company_tel,company_email,company_subject, company_info, company_image,  product_name,product_id,product_category,product_info, price,  product_image FROM company Orders WHERE ID='$id'"; //Orders Limit 1";

	

		if ($conn->query($sql) === TRUE) {
		    echo "Kompania u regjistrua ne databazen e perhershme dhe ";

		    // Create connection
					$conn = new mysqli($host, $user_name, $password, $db);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

						$sql = "DELETE FROM company WHERE ID='$id'";
							if ($conn->query($sql) === TRUE) {
							    echo "eshte fshire nga databaza e perkohshme !";

		
		


							   // header('Location: save-admin-product.php');
							} else {
							    echo "Error deleting record: " . $conn->error;
							}
				
			
		}
		 else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		} 


header('Location: temporarily.php');
$conn->close(); 

?>