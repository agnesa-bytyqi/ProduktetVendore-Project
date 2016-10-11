<?php
	
	session_start(); //Starting Session
	$error=''; // Variable To Store Error Message
	
	 // Starting Session
		
		if (isset($_POST['loginSubmit'])) 
		{
			if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				$error = "Username or Password is invalid";
			}
			else
			{
			// Define $username and $password
				$username=$_POST['username'];
				$password=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			
			$conn = mysqli_connect("localhost", "root", "", "product");
			if(mysqli_connect_errno())
			{
				"Failed to connect to MySQL : " . mysqli_connect_error();
			}
		   
			// To protect MySQL injection for Security purpose
		    $username = stripslashes($username);
		    $password = stripslashes($password);
		    $username = mysqli_real_escape_string($conn,$username);
		    $password = mysqli_real_escape_string($conn,$password);

		    // Selecting Database
		    $sql = "SELECT * FROM login WHERE password = '$password' AND username = '$username'";
		    
	    
    if($result=mysqli_query($conn,$sql))
    {
    // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);

      if($rowcount == 1)  
      {  
      	$_SESSION['logged_in']=TRUE;
        $_SESSION['login_user']=$username; // Initializing Session
        $_SESSION['errorLogin']="";
          header("location:temporarily.php"); // Redirecting To Other Page
      } 
      //Free result set
      mysqli_free_result($result);
  	}
      else 
      {
              $error = "Username or Password is invalid";
      }
        mysqli_close($conn); // Closing Connection
      	
     }
      
  }
 
?>