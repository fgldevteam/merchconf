$(document).ready(function() {

	//form submission:
	$("#submit").click(function(){
		return false;
	});

	$("#submit").click(function(){
		$(".error").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var fnameVal = $("#firstname").val();
		var lnameVal = $("#lastname").val();
//		var prefnameVal = $("#prefname").val();
		var emailVal = $("#email").val();
		var phoneVal = $("#phone").val();
		// var officeVal = $("#office").val();
		var dietVal = $("#diet").val();
		var roommateVal = $("#roommate").val();
//		var flightsVal = $("#flights").val();
		// var flightsVal = $('input[name=flights]:checked', '#regform').val()
//		var busVal = $("#bus").val();
		var busVal = $('input[name=bus]:checked', '#regform').val()
		//var activityVal = $("#activity").val();
		// var activityVal = $('input[name=activity]:checked', '#regform').val()

		// var emergencyNameVal = $("#emergency-name").val();
		// var emergencyNumberVal = $("#emergency-number").val();

		var shirtVal = $("#shirtsize").val();
		var jacketVal = $("#jacketsize").val();
		var pantVal = $("#pantsize").val();
		var shoesVal = $("#shoesize").val();
//		var declineVal = $("#decline").val();


		//validation
		if(fnameVal == '') {
			$("#firstname").after('<span class="error">Oops, we need your first name.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(lnameVal == '') {
			$("#lastname").after('<span class="error">Oops, we need your last name.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(emailVal == '') {
			$("#email").after('<span class="error">You forgot to enter your email address.</span>');
			hasError = true;
		} else if(!emailReg.test(emailVal)) {
			$("#email").after('<span class="error">Please enter a valid email address.</span>');
			hasError = true;
		}

		if(phoneVal == '') {
			$("#phone").after('<span class="error">Oops, we need your phone number.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(officeVal == '') {
			$("#office").after('<span class="error">Please select your department.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

/*
		if(activityVal == null) {
			$("#activity").after('<span class="error">Please choose an activity.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}
*/

		if(shirtVal == '') {
			$("#shirtsize").after('<span class="error">Please choose a size.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(jacketVal == '') {
			$("#jacketsize").after('<span class="error">Please choose a size.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(pantVal == '') {
			$("#pantsize").after('<span class="error">Please choose a size.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(shoesVal == '') {
			$("#shoesize").after('<span class="error">Please choose a size.</span>');
			hasError = true;
			$(window).scrollTop(0);
		}


		if(hasError == false) {
			//$(this).hide();
			$(this).hide();
			$("#sendemail").append('<br /><br /><img style="height: 15px; width: 128px; float: left;" src="/images/ajax-loader.gif" alt="Sending" id="sending" />');
			//$("#sendEmail li.buttons").append('<img src="img/loading.gif" alt="Loading" id="loading" />');


			$.post("sendEmail.php",
   				{ fname: fnameVal,
   				  lname: lnameVal,
   				  email: emailVal,
   				  phone: phoneVal,
   				  diet: dietVal,
   				  roommate: roommateVal,
   				  shirt: shirtVal,
				  pant: pantVal,
   				  jacket: jacketVal,
   				  shoes: shoesVal
   				},
   					function(data){
						$("#regform").slideUp("normal", function() {


							$("#regform").before("<h3>Thank You!</h3><p style='font-size: 16px;'>Your registration has been received.</p>");
						});
   					}
				 );
		}

		return false;
	});

});
