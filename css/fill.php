
<?php
$connn=mysqli_connect("localhost","root","","portal");
if(!$connn){
	die("Could not connect to the database".mysqli_error());
}else{
	echo"successfully connected to database ";
}

function getstudents($connn)
{
  
  $sql = "SELECT regno,firstname,lastname FROM users WHERE level  IS NOT NULL";

  return mysqli_query($connn,$sql);
}


if(isset($_POST['submit'])){
	$teacher=$_POST['teacher'];
	$type=$_POST['type'];
	$code=$_POST['code'];
	


	$result =mysqli_query($connn,"SHOW TABLE STATUS WHERE `Name`='exam'");
$data=mysqli_fetch_assoc($result);
$Exam_id=$data['Auto_increment'];
	
	$fish="INSERT INTO exam( Teacher, Type, coursecode) VALUES ('$teacher','$type','$code')";
		if(mysqli_query($connn,$fish)){
	echo "Details Submitted to the database <br>";
}
else{
	echo "failed to submit details ";

}


  $getting_noq=$_POST['noq'];
  
  // print_r($_POST);
	
  for( $i=1;$i<=$getting_noq;$i++){
    $work="INSERT INTO fillquestions(Examid, que, question_number) VALUES ($Exam_id,'{$_POST['q'.$i]}',$i)"; 
    
		if(mysqli_query($connn,$work)){
		echo "question  submitted ";
	}
	else{
		echo " failed to submit question";
	}
	}





//}

$checking= getstudents($connn);
   
if (mysqli_num_rows($checking) > 0) {
         
 while($row = mysqli_fetch_assoc($checking)) {
   if (isset($_POST[$row["regno"]])) {
// $send="INSERT INTO invitestudents(Examid, studentid) VALUES ($Exam_id, '')";
     $check="INSERT INTO invitestudents(Examid, studentid) VALUES ($Exam_id, '" . $row["regno"]. "')";
     if(mysqli_query($connn,$check)){
       echo "students invited";

     }else{
       echo "failed to invite students";
     }

   }
 }
 


}

mysqli_close($connn);

}


	

?>








































<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create Exams-fill</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  
  <style type="text/css" rel="stylesheet">

.list-group-item-action:hover{
	background-color:red !important;
}
input{
	border-radius:10px;
	padding:5px 2px 5px 2px;
	border:1px solid black;
}

	 </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Dashboard </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">My Quizzes</a>
        <a href="update.php" class="list-group-item list-group-item-action bg-light">Update Profile</a>
        <a href="choice.php" class="list-group-item list-group-item-action bg-light">Create Exam</a>
        <a href="logoutt.php" class="list-group-item list-group-item-action bg-light">Logout</a>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button  id="menu-toggle">=</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create Exam
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index1.php">Theory</a>
                <a class="dropdown-item" href="obj.php">Objectives</a>
                
                <a class="dropdown-item" href="fill.php">Fill in the Gap</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

     

<form method="post">


  <div class="form-group">
    <label for="formGroupExampleInput">Teacher Name:</label>
    <input type="text" class="form-control col-lg-6" id="formGroupExampleInput" placeholder="professor..." name="teacher">
  </div>
  
    <div class="form-group">
    <label for="formGroupExampleInput">Exam Type:</label>
    <input type="text" class="form-control col-lg-6" id="formGroupExampleInput" placeholder="Theory,obj..." name="type">
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput">Course code:</label>
    <input type="text" class="form-control col-lg-6" id="formGroupExampleInput" placeholder="Csc 205" name="code">
  </div>
 
<h3>Teachers should indicate space for answer by using the underscore(_)</h3>
  
 <input type="text" name="noq" id="noq" placeholder="How many questions are you creating"><button value="Create Exam"  class="btn btn-primary" id="create">Create Exam</button>

 <div id="question-container"></div>



 <!-- Button trigger modal -->
 <br><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Invite Students
</button>
<button type="submit" value="submit"  name="submit" class="btn btn-primary">Submit</button>
 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registered Students </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <?php 
        // if (isset($_POST['submit-invite'])){ 

          $result1 = getstudents($connn);

          
          if (mysqli_num_rows($result1) > 0) {
            
            while($row = mysqli_fetch_assoc($result1)) {
                echo '
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="s' . $row["regno"]. '" name="' . $row["regno"]. '">
                  <label class="custom-control-label" for="s' . $row["regno"]. '">
                    id: "' . $row["regno"]. '"  Name:"' . $row["firstname"]. '" "' . $row["lastname"] . '
                  </label>
                </div>
                ';
            }
          } else {
              
              echo "failed to display students ";
          }
          

        
       
      
        ?>

</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="invite">ok</button>
      </div>
    </div>
  </div>
</div>
       

 
</form>
 
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  
  <script src="js/fill-script.js"></script>

</body>

</html>