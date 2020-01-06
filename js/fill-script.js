$(document).ready(function(){
	$('#create').on('click', function(e){
		e.preventDefault();
		var no_questions=$('#noq').val();
		
		for(var i=1;i<=no_questions;i++){
			$('#question-container').append(
			`  <div class="form-group shadow-textarea">
			<label for="exampleFormControlTextarea6">Question</label>
			 <textarea class="form-control z-depth-1 col-lg-6" id="exampleFormControlTextarea6" rows="3" placeholder="Type questions here ..." name="q` + i + `"></textarea>
		</div>
			 <hr> `
			)
		}
	});
});



