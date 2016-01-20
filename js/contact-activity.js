$(document).ready(function() {

	//form submission:
	$("#submit").click(function(){
		return false;
	});
	
	$("#submit").click(function(){					   				   
		$(".error").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		var emailVal = $("#email").val();
	
		//validation
		if(emailVal == '') {
			$("#email").after('<span class="error">You forgot to enter your email address.</span>');
			hasError = true;
		} else if(!emailReg.test(emailVal)) {	
			$("#email").after('<span class="error">Please enter a valid email address.</span>');
			hasError = true;
		}	
		
		var act = $("input[name='activity']:checked").val();
/*
		var act = [];
		$("input[name='activity']:checked").each(function() {
			act.push($(this).val());
		});
		
		var act1 = act[0];
		var act2 = act[1];
*/

					
		if(hasError == false) {
			//$(this).hide();
			$(this).hide();
			$("#sendemail").append('<br /><br /><img style="height: 15px; width: 128px; float: left;" src="/images/ajax-loader.gif" alt="Sending" id="sending" />');
			//$("#sendEmail li.buttons").append('<img src="img/loading.gif" alt="Loading" id="loading" />');
			

			$.post("/activity/sendEmail.php",
   				{    				  
   				  email: emailVal,
   				  activity1: act
 //  				  deline: declineVal
   				},
   					function(data){
						$("#regform").slideUp("normal", function() {				  						
																													
							$("#regform").before("<h3>Thank You!</h3><p style='font-size: 16px;'>Your submission has been received.</p>");											
						});
   					}
				 );
		}			
		
		return false;
	});

});	