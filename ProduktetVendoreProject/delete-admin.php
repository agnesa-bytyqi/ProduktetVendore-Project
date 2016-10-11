<?php

//Delete a product.


$host = 'localhost';
$db = 'product';
$user_name = 'root';
$password = '';

$id = $_GET['IDp'];

// Create connection
$conn = new mysqli($host, $user_name, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//if(isset($_GET['ID']))
//{
// sql to delete a record

$sql = "DELETE FROM company WHERE ID='$id'";


if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
} else {
	    echo "Error deleting record: " . $conn->error;
	}

header('Location: temporarily.php');
$conn->close();

?>