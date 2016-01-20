$(document).ready(function() {

	//form submission:
	$("#submit").click(function(){
		return false;
	});
	
	$("#submit").click(function(){					   				   
		$(".error").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		var qVal = $("#question").val();
				//validation
		if(qVal == '') {
			$("#errorplaceholder").after('<span class="error">Oops, did you want to ask a question?</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

	
		if(hasError == false) {
			//$(this).hide();
			//$("#sendEmail li.buttons").append('<img src="img/loading.gif" alt="Loading" id="loading" />');
			

			$.post("sendQuestion.php",
   				{ q: qVal },
   					function(data){
						$("#qform").slideUp("normal", function() {				  						
							
																													
							$("#qform").before("<center><h1 class='super'>Thank You!</h1></center><p>Your question has been received. <a style='color: green !important;' href='#'  onClick='window.location.reload()'>Ask another?</a></p>");											
						});
   					}
				 );
		}			
		
		return false;
	});

});	