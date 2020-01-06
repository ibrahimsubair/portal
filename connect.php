<?php

$servername="localhost";
$username="root";
$password="";
$db_name="portal";

//create connections
$conn=new mysqli($servername,$username,$password,$db_name);

//check connection
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	echo"connected successfully";
}



?>
