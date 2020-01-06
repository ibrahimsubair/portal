<?php

$servername="localhost";
$username="root";
$password="";
$db_name="portal";
$table_name="users";

//create connections
$conn=new mysqli($servername,$username,$password,$db_name);

//check connection
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	//echo"connected successfully";
}

if(isset($_POST["update"]))
{
$conn=new mysqli($servername,$username,$password,$db_name);
$Firstname=$_POST["firstname"];
$Lastname=$_POST["lastname"];
$Email=$_POST["email"];
$Regno=$_POST["regno"];
$Password=$_POST["password"];
$email_change=$_POST["email_change"];


    





$query="UPDATE users SET firstname='$Firstname',lastname='$Lastname',regno='$Regno',email='$Email',password='$Password' WHERE email='$email_change'";
// echo " $query";




// $query="UPDATE update_profile firstname='',lastname='',email='',id='',password='' WHERE email=''";


if($conn->query($query)===TRUE){
		echo "New record successfully updated";
	}
	else{
		echo "Error with your update";
	}



	// end of isset
}


// $sql1="SELECT id FROM update_profile WHERE email=$Email";
// $sql= "UPDATE update_profile SET firstname='$Firstname' lastname='$Lastname' email='$Email' password='$Password' id='$ID' WHERE id=1";

// if($conn->query($sql)===TRUE){
// 		echo "New record successfully updated";
// 	}
// 	else{
// 		echo "Error with your update";
// 	}

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
	<title>Update profile</title>
	<style>
		body{
			/*background-color: #733434;*/
			background-image: url(images/img5.jpg);
			background-size: cover;
		}
		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
		    padding: 8px 15px 8px 15px;
		    margin: 10px 0px 15px 0px;
		    box-shadow: 1px 1px 2px 1px grey;
		    color: teal;
		}
		
     h1{
     	font-weight: 80%;
	    font-family: 'Luckiest Guy', cursive;
	    color: teal;
    }

	</style>
</head>
<body>
<center>
	<h1>UPDATE PROFILE</h1><br><br>
<form action="" method="POST">
    <input type="file" name="profilePicture"><br><br>
	<input type="text" name="firstname" placeholder="Enter the first name"><br>
	<input type="text" name="lastname" placeholder="Enter the last name"><br>
	<input type="text" name="email" placeholder="enter email"><br>
	<input type="text" name="regno" placeholder="enter regno"><br>
	<input type="text" name="password" placeholder="enter password"><br>
	<input type="email" name="email_change" placeholder="Enter Your former email"><br><br>
	<input type="submit" name="update" value="UPDATE PROFILE">
	
</form>
</center>

</body>
</html>


