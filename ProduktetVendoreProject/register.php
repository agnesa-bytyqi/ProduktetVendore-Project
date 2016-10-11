<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
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

if(isset($_POST['btn-signup']))
{
	$username = mysql_real_escape_string($_POST['username']);
	//$upass = md5(mysql_real_escape_string($_POST['pass']));
	$password = mysql_real_escape_string($_POST['password']);
	
	$username = trim($username);
	//$email = trim($email);
	$password = trim($password);
	
	//$conn = new mysqli($host, $user_name, $password, $db);
		// Check connection
	//if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
//}
	// email exist or not
	//$query = "SELECT username FROM login WHERE username='$username'";
	//if($result = mysqli_query($conn,$query))
	//{
		//$rowcount = mysqli_num_rows($result); // if email not found then register
	
	//if($rowcount == 0){
		$sql = "INSERT INTO login(username,password) VALUES('$username','$password')";
		//if(mysqli_query("INSERT INTO users(user_name,user_email,user_pass) VALUES('$uname','$email','$upass')"))
		if ($conn->query($sql) === TRUE) 
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	//else{
			
	//}
	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage - Login & Registration System</title>
<link rel="stylesheet" href="style1.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">← Back to Produktet Vendore</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>