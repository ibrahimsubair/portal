<?php  
include "connect.php";

?>
<?php 

if(isset($_SESSION['email'])){
	$id = $_SESSION['id'];
	$query = "SELECT *FROM  invitestudents WHERE studentid = $id";
	//$quiz = mysql_query($db,$query);

	$query = "SELECT *FROM invitestudents  WHERE studentid = $id";
	//$exams = mysql_query($db,$query);

	$query = "SELECT *FROM invitestudents WHERE studentid = $id";
	//$fexams = mysql_query($db,$query);
}

?>
<!--<?php //include "header.php";  ?>-->
<div id="content-wrapper">
	<div class="container-fluid">

<table class="table table-stripped table-sm mt-2">
			<thead class="thead-dark">
				<tr>
					<th colspan="2" class="text-center">Multichoice</th>
					<th scope="col"  class="text-center">Action</th>
				</tr>
			</thead>

<tbody>
	<?php while ($row = mysqli_fetch_assoc($quiz)):?>
	<?php if ($row['type']==1):?>
	<?php  


	$quizid = $row['quizid'];
	$query = "SELECT * FROM objquestions WHERE Examid = $quizid";
	$result = mysqli_query($db,$query);
	$quizname = mysqli_fetch_assoc($result);
	$eid = $quizname['multichoiceid'];
	$title = $quizname['title'];
	?>

	<tr>

		<td colspan="2" class="text-center"> <?php echo $title;  ?> </td>

		                                                         <!-- the button part i dont know whats there -->
		<td class="text-center"><a href="questions.php?q=quiz&eid=<?php echo $eid; ?>&n=1"> <button></button></a></td>
	</tr>
<?php endif  ?>
<?php endwhile  ?>

</tbody>
</table>

<table class="table table-stripped table-sm mt-3">
	<thead class="thead-dark">
		<tr>
			<th colspan="2" class="text-center">Theory Questions</th>
			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php while($row = mysqli_fetch_assoc($exams)): ?>
		<?php if($row['type']==2) :?>
		<?php 

			$examid = $row['examid'];
			$query = "SELECT * FROM theoryquestion WHERE Examid = $examid";
			$result = mysqli_query($db,$query);
			$quizname = mysqli_fetch_assoc($result);
			$eid = $quizname['theoryid'];
			$title = $quizname['title'];

		?>
		<tr>
			<td colspan="2" class="text-center"><?php echo $title;?></td>
			<td class="text-center"><a href="tquestions.php?q=quiz&eid=<?php echo $eid; ?>&n-1"><button class="btn btn-primary">Take quiz</button></a><a href=""><button class="btn btn-secondary ml-1">Reject</button></a></td>

		 <?php endif  ?>
		<?php endwhile  ?>

</tbody>
</table>

<table class="table table-stripped table-sm mt-3">
	<thead class="thead-dark">
		<tr>
			<th colspan="2" class="text-center">Fill in the blank</th>
				<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = mysqli_fetch_assoc($fexams)):  ?>
		<?php if($row['type']==3) :?>	
		<?php 
			$examid = $row['quizid'];
			$query = "SELECT * FROM fillquestions WHERE Examid = $examid";
			$result = mysqli_query($db,$query);
			$quizname = mysqli_fetch_assoc($result);
			$eid = $quizname['fibid'];
			$title = $quizname['title'];
		?>
		<tr>
			<td colspan="2" class="text-center"> <?php echo $title; ?></td>
			<td class="text-center"><a href="fill.php?q=quiz&eid= <?php echo $eid; ?>&n=1"></a><button></button></td>
		</tr>

	<?php endif ?>
	<?php endwhile ?>

</tbody>
</table>
		

		
	</div>
</div>