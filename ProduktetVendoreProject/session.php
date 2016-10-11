<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root", "", "product");
// Selecting Database
mysqli_select_db($conn,"product");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql="SELECT username FROM login WHERE username = '$user_check'";
$ses_result=mysqli_query($conn,$ses_sql);

$row = mysqli_fetch_assoc($ses_result);
$login_session =$row['username'];
	

if(!isset($login_session))
{
	mysqli_close($conn);// Closing Connection
	header('Location: adminLogin.php'); // Redirecting To Home Page
}
?>