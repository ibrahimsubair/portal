<?php
session_start();
//echo "Welcome ". $_SESSION['username'];


if(isset($_POST["logout"])) {
    if(!empty($_SESSION["login"])) {
      $_SESSION['username'] = ''; // NOT $_Session['studentid'] 
      session_unset();
      session_destroy();
      header("dash.php");
  }
  header("location:dash.php");
  }
 // echo "Welcome ". $_SESSION['username'];
?>


<!DOCTYPE html>
<html>
<title>Take Exam</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5{font-family: "Raleway", sans-serif; color: teal;}
body{
  background-image: url(images/img5.jpg);
  background-size: cover;
}
</style>
<body>
  <div class="top grey-gradient" style="font-size: 40px; text-align: center; font-family: 'Girassol', cursive;">
    <marquee dir="left">ONLINE EXAMINATION PORTAL</marquee>
  </div>

<!-- Top container -->
<!--<div class="w3-bar w3-top w3-black w3-large grey-gradient" style="z-index:4">-->
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <!--<span class="w3-bar-item w3-right">Logo</span>-->
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse grey-gradient w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <!--<div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>-->
   <!-- <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Mike</strong></span><br>-->
      <div class="sidebar-header ">
            <h3 style="color:teal;"><?php echo "Welcome ".$_SESSION['username']; ?></h3>
  
     <!-- <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>-->
  </div>
  <hr style="background-color: teal;">
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <!-- We would add php to this line -->
    <!-- You're going to check the database if there's any record in the invitestudents table where this student's is the id/ what are you saying here 
     and the reflection is 0. Clear? yes
     buT for the reflected column why did it show 0 immediately?
     There's one issue tho.
     Your invitestudents table uses student id. We don't have the student id here in php (only the username, because its in the session)
     For now, assume this problem doesn't exist
     Oya start-->
     
     
     <?php
     $conn=mysqli_connect("localhost","root","","portal");
   /*   if($conn){
       echo "succesful";
     }
     else{
       echo "error";
    }
 */
 

  $sql="SELECT invitestudents.Examid FROM invitestudents INNER JOIN users ON users.regno=invitestudents.studentid WHERE invitestudents.reflected=0 AND users.username='{$_SESSION['username']}'";
  // where is it here?
  // mysqli query
  // new var = mysqli_query($conn,$sql
  $monitor_quiz=mysqli_query($conn,$sql);
  if($monitor_quiz){
 /*    echo "students invited";

  }else{
    echo "failed to invite students"; */
  } 
   $quiz_counter = mysqli_num_rows($monitor_quiz);

   /*  while($row = mysqli_fetch_assoc($conn)) {
      if (isset($_POST[$row["i dont know what to put here "]])) {
        
   
      }
    } */
    
  
   
     
     ?>
    <a href="myquizzes.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>
      My Quizzes
      <span class="badge badge-secondary"><?php echo $quiz_counter ?></span>
    </a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>Exams</a>
    <a href="choice.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>Create Exams</a>
    <a href="update.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>Update Profile</a>
    <form method="POST" action="index.php">
            <button type="submit" name="logout" class="btn grey-gradient">logout</button>
  <!--<input type="submit" name="logout" value="logout">-->
</form>
    
  </div>
 
    
</nav>


<!-- Overlay effect when opening sidebar on small screens -->

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer;" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <!--<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Dashboard</b></h5>
  </header>-->

 <!--<div class="content">
   <button class="btn grey-gradient text6" >EXAMS</button>
 </div>-->
    
 <!--<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container grey-gradient w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>My Quizzes</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container grey-gradient w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Exams</h4>
      </div>
    </div>
     <div class="w3-quarter">
      <div class="w3-container grey-gradient w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Create Exams</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container grey-gradient w3-padding-16">
        <div class="w3-left"></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Update Profile</h4>
      </div>
    </div>
  
</div>-->
   






















































   

 

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
