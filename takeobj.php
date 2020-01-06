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
 include "connect.php";
?>


<?php 
$exidenti = $_GET['examid'];
 $sql="SELECT invitestudents.Examid, objquestions.qsn_no,objquestions.question,objquestions.optionA, objquestions.optionB, objquestions.optionC,objquestions.optionD FROM invitestudents INNER JOIN objquestions ON invitestudents.Examid=objquestions.Examid INNER JOIN users
  ON invitestudents.studentid=users.regno
   WHERE users.username='{$_SESSION['username']}' AND invitestudents.Examid=$exidenti";


    $result=mysqli_query($conn,$sql);
$anothervariable=mysqli_num_rows($result);
        ?>

        <?php 
        if (isset($_POST['submit'])){


          $getting="SELECT `Examid`, `qsn_no`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `Correct_Answer` 
          FROM `objquestions` WHERE Examid=$exidenti";

          $queryvariable=mysqli_query($conn,$getting);

          if(mysqli_num_rows($queryvariable)>0){

          while($row=mysqli_fetch_assoc($queryvariable)){
            $questionnumber= $row ['qsn_no'];
           $Studentresponse= $_POST[$questionnumber];
            
           if( $Studentresponse==$row['Correct_Answer']){
             $score=1;
           }else{
             $score=0;
           }
           $gettingstudentid="SELECT  regno FROM users WHERE username='{$_SESSION['username']}'";
           $query=mysqli_query($conn,$gettingstudentid);
           $query2 = mysqli_fetch_assoc($query);
           $userid=$query2['regno'];


           $submit="INSERT INTO `objresponse`(`Examid`, `questio_no`, `answer`, `score`, `userid`) 
           VALUES ($exidenti,$questionnumber, $Studentresponse,$score,$userid)";

          $query3=mysqli_query($conn,$submit);

            
          }
          header("Location: objresult.php?Examid=$exidenti");
            

        
        }


        }
        
        
        
        
        
        
        
        
        
        
        ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create Exam-obj</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  
  <style type="text/css" rel="stylesheet">

nav{
  background-image:url(images/eraser.jpg);
}
#sidebar-wrapper{
  background-image:url(images/eraser.jpg);
}
.btn-light
{
    color:black !important;

}
	 </style>

</head> 


 
<body>
<!-- <body class="grey-gradient"> -->

 <div class="d-flex" id="wrapper"> 

    <!-- Sidebar -->
    <div class="bg-light border-right " id="sidebar-wrapper">
      <div class="sidebar-heading">Dashboard </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">My Quizzes</a>
        <a href="update.php" class="list-group-item list-group-item-action ">Update Profile</a>
        <a href="choice.php" class="list-group-item list-group-item-action ">Create Exam</a>
        <a href="logoutt.php" class="list-group-item list-group-item-action ">Logout</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
        <button  id="menu-toggle">=</button>

        <button class="navbar-toggler grey-gradient" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="choice.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logoutt.php">Logout</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create Exam
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php">Theory</a>
                <a class="dropdown-item" href="obj.php">Objectives</a>
                <a class="dropdown-item" href="fill.php">Fill in the Gap</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

<br>

<form method="POST">
<?php
      if($anothervariable>0){
        while($row=mysqli_fetch_assoc($result)){
        

    ?>
<div class="card">
   
  <h5 class="card-header"> <?php echo $row['qsn_no'].')'. ' ' . $row['question']; ?> </h5>
  <div class="card-body">
   <!--  <h5 class="card-title"></h5> -->

   <!-- Material unchecked -->
<div class="form-check">
  <input type="radio" class="form-check-input" id="optionA" value="<?php echo $row['optionA'];?>" name="<?php echo $row['qsn_no']; ?>">
  <label class="form-check-label" for="optionA"><?php echo $row['optionA'];?></label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input type="radio" class="form-check-input" id="optionB" value="<?php echo $row['optionB'];?>" name="<?php echo  $row['qsn_no']; ?>">
  <label class="form-check-label" for="optionB"><?php echo $row['optionB'];?></label>
</div>

<div class="form-check">
  <input type="radio" class="form-check-input" id="optionc" value="<?php echo $row['optionC'];?>" name="<?php echo $row['qsn_no']; ?>">
  <label class="form-check-label" for="optionc"><?php echo $row['optionC'];?></label>
</div>
    
<div class="form-check">
  <input type="radio" class="form-check-input" id="optiond" value="<?php echo $row['optionD'];?>"  name="<?php echo $row['qsn_no']; ?>">
  <label class="form-check-label" for="optiond"><?php echo $row['optionD'];?></label>
</div>
    
   
  </div>
</div>
<?php
        }
      }else{
          echo "<h3 style='margin-left:50px;'>You dont have any Exams for now :)</h3>";
      }

  ?>
   <button type="submit" class="btn btn-success" name="submit" class="btn btn-success">Submit</button>
  </form>




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>




<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  


</body>
</head>

 