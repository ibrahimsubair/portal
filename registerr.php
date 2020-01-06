<?php 
include "connect.php";
include 'photo.php';
if(isset($_POST['submit'])){
$Firstname=$_POST["firstname"];
$Lastname=$_POST["lastname"];
//$reg_no=$_POST["Reg_no"];
$Level=$_POST["level"];
$Email=$_POST["email"];
$Username=$_POST["username"];
$Password=$_POST["password"];


//folder to store uploads
//define ('PROFILE_TARGET_DIR','../profile-pic');


//will hold the picture name
//$photo = '';

//if(is_uploaded_file($_FILES["file"]["tmp_name"])){
  //  $target = PROFILE_TARGET_DIR .basename($_FILES["file"]["name"]);

//get the extension
  //  $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

//rename the uploaded picture
  //  $photo = md5($userid.$imageFileType) . '.' . $imageFileType;
//}

//save the picture to the folder if any
//if(!empty($photo)){
   // $targetFile = PROFILE_TARGET_DIR .$photo;

//if it already exists, delete the old one
   // if(file_exists($targetFile)){
        //change the file permissions allowed
     //   chmod($targetFile, 0755);
        //remove the file
      //  unlink($targetFile);
   // }

    //save the file
    //move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
//}

$Level= empty($Level) ? 'NULL':"'$Level'";

$sql="INSERT INTO users(firstname,lastname,level,email,username,password) 
VALUES('$Firstname','$Lastname',$Level,'$Email','$Username','$Password' )";


 if($conn->query($sql)===TRUE) {
    echo "New record created successfully";
}

else {
    echo "NOT successfull";
}


}




 ?>

 <!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css" rel="stylesheet">
        body{
            margin: 0px;
        padding: 0px;
        /* background-size: cover; */
        background-color:black;
        color:white;
        font-family: sans-serif;
        }

        .main{
            margin: 0px;
        padding: 0px;
        background-color:black/*  rgba(0,0,0,0.9) */;
        height: 550px;
        width: 580px;
        margin-bottom: 30px;
        border-radius: 10px;
        margin-top: 90px;
        }

        input{
        outline: none;
        border:;
        width: 270px;
        height: 30px;
        background: transparent;
        font-size: 15px;
        color: white;
        border-bottom: 2px solid white;
        margin-left: 10px;
        margin-bottom: 10px;
        font-family: sans-serif;
    }

    input:hover{
        border-bottom: 2px solid teal;
        height: 35px;
    }

    a{
        text-decoration: none;
        color: lavender;
        margin-left: 15px;
        font-size: 20px;
    }
    a:hover{
        color: teal;
    }

    h2{
        /* font-family: 'Calistoga', cursive; */
        text-align: center;
        color:black;
    }

    .jumbotron{
        border-radius:10px!important;
    }

    button{
        border: none;
        outline: none;
        width: 200px;
        height: 45px;
        background-color: #fff;
        border-radius: 10px;
        margin-left:100px;
        margin-top: 30px;
        margin-bottom: 30px;
        color: black;
        font-size: 18px;
        font-weight: bold;

    }
    button:hover{
        background-color: teal;
        cursor: pointer;
        color: black;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register-page </title>

    <!-- Font Icon -->
    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
     <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="#">
</head>
<body class="bg-dark">
    <center>
   <form method="post">
  <!--   <div class="main"> -->
    <div class="jumbotron text-center mdb-color lighten-2 white-text mx-2 mb-5 col-lg-8">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">CREATE AN ACCOUNT</h2>
                        <!--<div class="form-group">
                         <input type='file' name='photo' />-->
                         <!--<input type='submit' value='upload' name='but_upload'>-->
                     </div>


                        <div class="form-group">
                        <input class="form-control form-control-lg" type="text"name="firstname" id="name" placeholder="Firstname">

                            <!-- <input type="text" class="form-input" name="firstname" id="name" placeholder="Firstname"/> -->
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lastname" id="name" placeholder="Lastname"/>
                        </div>

                       <!-- <div class="form-group">
                            <input type="text" class="form-input" name="Reg_no" id="name" placeholder="Registration Number(students only)"/>
                        </div>-->
                        <div class="form-group">
                            <input type="text" class="form-input" name="level" id="name" placeholder="Level(students only)"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="email" id="name" placeholder="name@gmail.com"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="name" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="signup-w3ls">
                            <div class="signup-agile1">
                               <form action="#" method="post">
                                  <div class="form-control">
                                       <!--<label class="header">Profile Photo:</label>
                                        <input id="image" type="file" name="photo" placeholder="Photo" required="capture">
                                   </div>-->
                                  <!-- <form method="post" action="" enctype='multipart/form-data'>
                                  <input type='file' name='file' />
                                 <input type='submit' value='Save name' name='but_upload'>
                                </form>-->
                               </form>
                            </div>
                        </div>
             
                        
                        <div class="form-group">
                            <button type="submit" name="submit"/>Submit</button>
                        </div>
                        
                    <p class="loginhere">
                        Already have an account? <a href="loginn.php" class="loginhere-link">Login</a>
                    </p>
                </div>
                <center>
               <!-- <div >
                	<h5 ><a href="photo.<?php  ?>" style="color: black">click here to upload your photo after submitting</a></h5>
            </div></center>-->
        </section>

    </div>
    </form>
</center>
    <!-- JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>