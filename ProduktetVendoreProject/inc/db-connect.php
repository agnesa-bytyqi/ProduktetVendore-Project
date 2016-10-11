<?php
//DB connection data
$host = 'localhost';
$db = 'product';
$user_name = 'root';
$password = '';

//session_start();
	
	if(!mysql_connect($host, $user_name, $password)){
		exit('Lidhja nuk mund te krijohet');
	
	if (!mysql_select_db($db)){
		exit('Nuk mund te selektohet databaza');
	} 
}
	
	//$conn = new mysqli($host, $user_name, $password);
	
	//if ($conn->connect_error) 
	//{
		//die("Connection failed: " . $conn->connect_error);
	//} 
	else
	{
	echo "Connected successfully"; 
}
?>
