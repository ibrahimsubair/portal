<?php
    include"connection.php";
    if(!isset($_GET['code'])){
        exit("cannot find page");
    }
    $code=$_GET['code'];
    $getEmailQuery=mysqli_query($conn,"SELECT email FROM resetPassword WHERE code='$code'");
    if(mysqli_num_rows($getEmailQuery)==0)
    {
        exit("cannot find page");  
    }
      
    if(isset($_POST['submit'])){
         $password=$_POST['password'];
         $row=mysqli_fetch_array($getEmailQuery) ;
         $email=$row['email'];
         $query=mysqli_query($conn,"UPDATE users SET password='$password' WHERE email='$email'");
         if($query){
            
            $q=mysqli_query($conn,"DELETE FROM resetPassword WHERE code='$code'");
            // echo("Password updated successfully");
            //header("location:loginn.php");
         }
        }
    

?>
<!doctype html>
<head>
    <title>Reset password</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
<link href="indexes.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<form method='POST'>
<!--Form with header-->
<div class="card card2">
    <div class="card-block">

        <!--Header-->
        <div class="form-header grey-gradient text1">
            <h3><i class="fa fa-user"></i> Reset Password:</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" name='password'class="form-control">
            <label for="form4">Your new password</label>
        </div>
        <div class="text-center">
            <button type="submit" name='submit'class="btn grey-gradient text1">Reset</button>
        
    </div>
    </div>
</div>
    </form>
<!--/Form with header-->
<<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js"></script>>
</body>
</html>