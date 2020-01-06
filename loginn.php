<?php
session_start();
include 'connect.php';
if(isset($_POST["submit"])){

$Username = $_POST['username']; 
$Password = $_POST['password'];

$sql = "SELECT username, password FROM users WHERE username = '$Username' AND password = '$Password'";
$result = $conn->query($sql);

if($result->num_rows >0){
	while ($row = $result->fetch_assoc()){
		$_SESSION ['username'] = $row['username'];
		$_SESSION ['password'] = $row['password'];

		echo $_SESSION['username'];
		
		$_SESSION ['login'] = true;

	}
	if(!empty($_SESSION["login"])) {
		header("location:dash.php");
	}
	}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>

	<style type="text/css">
body{
	margin: 0px;
	padding: 0px;
	background-image: url(images/white.jpg);
	background-repeat: none;
	background-size: cover;
	color: white;
}
.login-page{
	margin-top: 140px;
	background-color:#2d6480/*  rgba(0,0,0,.9) */;
	border: 1px solid black;
	width: 350px;
	height: 420px;
	box-sizing: border-box;    /*allows us to include the padding and border in an element's total width and height.*/
	border-radius: 10px;
}
input[type="text"],input[type="password"]{
	border: none;
	border-bottom: 2px solid white;
	background: transparent;
	outline: none;
	width: 260px;
	height: 35px;
	margin-bottom: 20px;
}
input[type="checkbox"]{
	border: 2px solid black;
	width: 15px;
	height: 15px;
}
.rm{
	margin-left: -140px;
	font-size: 18px;

}
.login-page p{
	margin: 0px;
	padding: 0px;
	text-align: left;
	padding-left: 45px;
}
input[type="text"],input[type="password"]{
	color: #fff;
	font-size: 15px;
}
button{
	width: 260px;
	background: #fff;
	outline: none;
	border: none;
	border-radius: 10px;
	height: 40px;
	font-size: 18px;
	color: black;
	font-family: sans-serif;
	margin-bottom: 25px;
	margin-top: 18px;
}
button:hover{
	background: teal;
	color: black;
	cursor: pointer;
}

h1{
	color:white;
	font-family: 'Nanum Myeongjo', serif;
	font-size: 40px;

}
p a{
	text-decoration: none;
	color: darkgray;
}
p a:hover{
	color: teal;
}
.jumbotron{
		width:400px !important;
		border-radius:40px  0px 40px 0px!important;
		margin-top:50px;
		
	}
	
</style>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
<!--===============================================================================================-->


	
</head>
<body>
	<!--<form method="POST" action="loginn.php">
		<input type="text" name="username">
		<input type="text" name="password">
		<input type="submit" name="submit" value="login">
		


	</form>-->

	<!--<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="loginn.php">
					<span class="login100-form-title">
						User Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="mailer/new/forgotpassword.php">
						 Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="registerr.php">n
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			
			</div>
		</div>
	</div>-->

	<center>
	<div class="jumbotron text-center mdb-color lighten-2 white-text mx-2 mb-5">
<!-- <div class="login-page"> -->
	<h1>Login</h1>
<form  name="myform" onsubmit="return check()" action="" method="POST">
	  <p>Username</p>
      <input type="text" placeholder="Enter username" id="username" name="username" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];}?>"></br>
      <p>Password</p>
	  <input type="password" placeholder="Enter Password" id="password" name="password" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];}?>"></br>
	  <!--<div class="rm"><input type="checkbox" name="remember">Remember me</br></div>-->
	  <button type="submit" name="submit">Login</button></br>	  
</form>
      <p><a href="registerr.php">Don't have an Account? Register</a></p></br>
      <p><a href="mailer/forgotpassword.php">Forgot Password?</a></p>
</div>
</center>
					<script>
	                function check(){
					var j_password=document.myform.n_pass.value;
	                if(j_password.length<6){
	                alert("should have atleast 6 characters");
					return false;
	                }
					}
					</script>
	
	

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>



</body>
</html>