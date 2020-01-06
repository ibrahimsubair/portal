
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>obj-result</title>

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
<?php 
$exidenti=$_GET['Examid']
 $sql=SELECT  `Teacher`, `Type` FROM `exam` 
 WHERE ID=$exidenti;


 wheresession

 
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



      <div class="jumbotron">
  <h2 class="display-4"><?php echo $row['']</h2>
  <p class="lead">INSTRUCTOR NAME </p>
  <hr class="my-4">
  <p>STUDENT SCORE APPEARS HERE  </p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>














































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

 