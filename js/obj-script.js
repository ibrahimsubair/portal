$(document).ready(function(){
	$('#create').on('click', function(e){
		e.preventDefault();
		var no_questions=$('#noq').val();
		
		for(var i=1;i<=no_questions;i++){
			$('#question-container').append(
			`  <div class="form-group">
			<label for="formGroupExampleInput">Question</label>
			   <input type="text" class="form-control col-lg-6" id="formGroupExampleInput" placeholder="Enter exam Question"  name="q` + i +`">
			</div>
			 <!-- Default input -->
			 <div class="form-group">
			   <label for="formGroupExampleInput2">Option A</label>
			   <input type="text" class="form-control col-lg-4" id="formGroupExampleInput2" placeholder="Exam Options" name="a` + i + `">
			 </div> 
				  <div class="form-group">
			   <label for="formGroupExampleInput">Option B</label>
			   <input type="text" class="form-control col-lg-4" id="formGroupExampleInput" placeholder="Exam Options" name="b` + i + `">
			 </div>
			 <!-- Default input -->
			 <div class="form-group">
			   <label for="formGroupExampleInput2">Option C</label>
			   <input type="text" class="form-control col-lg-4" id="formGroupExampleInput2" placeholder="Exam options" name="c` + i + `">
			 </div>
			   
				 <div class="form-group">
			   <label for="formGroupExampleInput2">Option D</label>
			   <input type="text" class="form-control col-lg-4" id="formGroupExampleInput2" placeholder="Exam Options" name="d` + i + `">
			 </div>
			 
			   <div class="form-group">
			   <label for="formGroupExampleInput2">Correct Answer</label>
			   <input type="text" class="form-control col-lg-4" id="formGroupExampleInput2" placeholder="Input correct Answer" name="cans` + i + `">
			 </div>

    <hr>`
			)
		}
	});
});




