<?php
include "connection.php";
//  use once and comment after;
// $sql = "CREATE TABLE resetPassword (
//     ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     code VARCHAR(255) NOT NULL,
//     email VARCHAR(50)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Table register created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }

if(isset($_POST['submit'])){
$email=$_POST['mail'];
$sqli="SELECT * from users where email='$email'";
$result=$conn->query($sqli);
if (empty($email)){
    echo"\nemail is required\n"."<br>";
  }
if($result->num_rows<=0){
            echo"this email does not exist in database";
     }
else{
    
    include "pasword2.php";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/forgotpassword.css"> -->
      <!-- Font Awesome -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href="#" rel="stylesheet" type="text/css"/>
</head>
<body>
            <!--Form with header-->
<div class="card card2">
    <div class="card-block">

        <!--Header-->
        <div class="form-header text1" style="background-color: teal;">
            <h3><i class="fa fa-user"></i> 
            <h3 style="color: black; font-family: 'Calistoga',cursive;">Forgot your password?</h2>
        <p style="color: black; font-family: 'Calistoga', cursive; ">reset here</p>
        </h3>
        </div>
        <form method="post">
        <!--Body-->
        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="email" name='mail' id="form4" class="form-control">
            <label for="form4">Enter Email</label>
        </div>
        <div class="text-center">
            <button type="submit" name='submit' class="btn  text1" style="background-color: teal;">Reset Password</button>
            
        </div>
</form>
    </div>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js"></script>
</body>
</html>