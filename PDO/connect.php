<?php
try{
	$host="localhost";
	$dbname="test";
	$user="root";
	$pass="";
	
$db = new PDO("mysql:host=$host;dbname=$dbname", $user,$pass);
 // echo "Database connection completed successfully";
}catch(PDOException $e){
	echo $e->getMessage();
	
}

?>