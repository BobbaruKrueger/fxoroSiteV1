
$(document).ready(()=>{
	// // get google recaptcha 
	// grecaptcha.ready(function() {
	// 	grecaptcha.execute('6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', {action: 'referral'}).then(function(token) {
	// 	//    console.log(token);
	// 	   document.getElementById('g-recaptcha-response').value = token;
	// 	});
	// });

	// initialize google phone number library
	const libphonenumber = window.libphonenumber;
		// initialize ip country name and code variables
		let currentip = "";
		let currentcountrycode = "";
		let currentcountryname = "";
		// the fxoro api token
		let apiToken = {
			"Token": "A82BB7E8-C1CA-46A6-B470-7DDBDB2D938E"
		};
		
        // ajax method for current user phone number
		$.ajax(
		{
			method: "POST",
			url: "https://pubservices.fxoro.com/api/landingpage/iptocountry",
			data: apiToken,
			success: function (data) {
				if (data == "") {
					//Calling to IP-API                     
					if ($('#country').val() == "") {
						$.getJSON("https://ipapi.co/json/", function (data) {
							
							let options =  $('#country option');

							$.each( options, (index , value)=>{
								if(  $(value).attr('data-country') == data.country ){		
									// set as selected
									$(value).attr('selected', 'selected');
									// add to prefix field
									$('#phoneprefix').val( '+' + $(value).attr('value'));
								}
							});
						watchOptions();
						});	
					}
					else {
						countrycodeval = $('#country').val();     
						$('#phoneprefix').val( '+' + countrycodeval);
						watchOptions();
					}
				}
				else {
					//store result from fxoro service IP
					currentip = data.IpAddress;
					currentcountryname = data.Name;
					currentcountrycode = data.IsoCode;
					mycountrycode = currentcountrycode;
					mycountryname = currentcountryname;
					ipcountry = data.Name;
					
					// set option as selected 
					if ($('#country').val() == "") {
						let options =  $('#country option');

						$.each( options, (index , value)=>{
							if(  $(value).attr('data-country') == currentcountrycode ){		
								// set as selected
								$(value).attr('selected', 'selected');
								// add to prefix field
								$('#phoneprefix').val( '+' + $(value).attr('value'));
							}
						});
						watchOptions();
					}
					else {
						countrycodeval = $('#country').val();     
						$('#phoneprefix').val( '+' + countrycodeval);
						watchOptions();
					}
				}
			},
			error: function (errMsg) {
				//Calling to IP-API                     
				if ($('#country').val() == "") {
					$.getJSON("https://ipapi.co/json/", function (data) {
						
						let options =  $('#country option');

						$.each( options, (index , value)=>{
							if(  $(value).attr('data-country') == data.country ){		
								// set as selected
								$(value).attr('selected', 'selected');
								// add to prefix field
								$('#phoneprefix').val( '+' + $(value).attr('value'));
							}
						});
					watchOptions();
					});	
				}
				else {
					countrycodeval = $('#country').val();     
					$('#phoneprefix').val( '+' + countrycodeval);
					watchOptions();
				}
			}
		});
        // ajax method for current user referral phone number
		$.ajax(
		{
			method: "POST",
			url: "https://pubservices.fxoro.com/api/landingpage/iptocountry",
			data: apiToken,
			success: function (data) {
				if (data == "") {
					//Calling to IP-API                     
					if ($('#fcountry').val() == "") {
						$.getJSON("https://ipapi.co/json/", function (data) {
							
							let options =  $('#fcountry option');

							$.each( options, (index , value)=>{
								if(  $(value).attr('data-country') == data.country ){		
									// set as selected
									$(value).attr('selected', 'selected');
									// add to prefix field
									$('#fphoneprefix').val( '+' + $(value).attr('value'));
								}
							});
                        watchFriendOptions();
						});	
					}
					else {
						countrycodeval = $('#fcountry').val();     
						$('#fphoneprefix').val( '+' + countrycodeval);
						watchFriendOptions();
					}
				}
				else {
					//store result from fxoro service IP
					currentip = data.IpAddress;
					currentcountryname = data.Name;
					currentcountrycode = data.IsoCode;
					mycountrycode = currentcountrycode;
					mycountryname = currentcountryname;
					ipcountry = data.Name;
					
					// set option as selected 
					if ($('#fcountry').val() == "") {
						let options =  $('#fcountry option');

						$.each( options, (index , value)=>{
							if(  $(value).attr('data-country') == currentcountrycode ){		
								// set as selected
								$(value).attr('selected', 'selected');
								// add to prefix field
								$('#fphoneprefix').val( '+' + $(value).attr('value'));
							}
						});
						watchFriendOptions();
					}
					else {
						countrycodeval = $('#fcountry').val();     
						$('#fphoneprefix').val( '+' + countrycodeval);
						watchFriendOptions();
					}
				}
			},
			error: function (errMsg) {
				//Calling to IP-API                     
				if ($('#fcountry').val() == "") {
					$.getJSON("https://ipapi.co/json/", function (data) {
						
						let options =  $('#fcountry option');

						$.each( options, (index , value)=>{
							if(  $(value).attr('data-country') == data.country ){		
								// set as selected
								$(value).attr('selected', 'selected');
								// add to prefix field
								$('#fphoneprefix').val( '+' + $(value).attr('value'));
							}
						});
                    watchFriendOptions();
					});	
				}
				else {
					countrycodeval = $('#fcountry').val();     
					$('#fphoneprefix').val( '+' + countrycodeval);
                    watchFriendOptions();
				}
			}
		});


	function watchOptions(){
		let selected = $('select#country option:selected').text();
								
		$('select#country').on('change', function() {
			selected = this.value;
			$('#phoneprefix').val( '+' + selected);
		});
	}
	function watchFriendOptions(){
		let selected = $('select#fcountry option:selected').text();
								
		$('select#fcountry').on('change', function() {
			selected = this.value;
			$('#fphoneprefix').val( '+' + selected);
		});
	}
	
	// create methot to validate if the phone number is valid
	
	jQuery.validator.addMethod( "isValidPhoneNumber", function(value, element){
        let result;
		if ( $(element).is('#phonenumber')) {
             result =  libphonenumber.parsePhoneNumber( $('#phoneprefix').val() + value ).isValid();
            
        }else if ( $(element).is('#fphonenumber')) {
            result =  libphonenumber.parsePhoneNumber( $('#phoneprefix').val() + value ).isValid();
        }
		return result;

	},"Please enter a valid Phone Number.");
		

	$('#cssecoReferralForm').validate({
		// activate validation on key up
		onkeyup: function(element) {
			if( $(element).valid() ){
				$(element).closest('.form-group').find('.isValid').css('display', 'block');
				$(element).closest('.form-group').find('.isError').css('display', 'none');
			}else{
				$(element).closest('.form-group').find('.isValid').css('display', 'none');
				$(element).closest('.form-group').find('.isError').css('display', 'block');
			}
		},
		errorElement: 'div',
		errorPlacement: function(error, element) {
			if ( $(element).is('#phonenumber') || $(element).is('#fphonenumber') ) {
				error.appendTo( element.closest(".form-group") );
			}else{
				error.insertAfter(element);
			}
			
		},
		invalidHandler: function(event, validator) {
			// 'this' refers to the form
			console.log('error');
			
			var errors = validator.numberOfInvalids();
			if (errors) {
			  var message = errors == 1
				? 'You missed 1 field. It has been highlighted'
				: 'You missed ' + errors + ' fields. They have been highlighted';
			  $("div.error span").html(message);
			  $("div.error").show();
			} else {
			  $("div.error").hide();
			}
		},
       
		rules:{
            fname:{
                required: true,
                minlength: 2,
            },
			lname:{
				required: true,
				minlength: 2
            },
            Email:{
				required: true,
				minlength: 8,
				email: true
			},
			phone:{
				required: true,
				digits: true,
				minlength: 6,
				isValidPhoneNumber: true
			},
			fFname:{
                required: true,
				minlength: 2,
			},
			fLname:{
                required: true,
				minlength: 2
			},
            fEmail:{
                required: true,
                minlength: 8,
                email: true
            },
			fphonenumber:{
				required: true,
				digits: true,
				minlength: 6,
				isValidPhoneNumber: true
            }
            // ,
			// refmessage:{
			// 	required: true,
			// 	minlength:5,
			// 	maxlength:255
			// }
		}
	});
	$('#submit-referral').on( 'click', (e)=>{
		e.preventDefault();
		if ( $('#cssecoReferralForm').valid() ){
		
			// // var recaptchaResult = false;
			// var recaptcha = $('#g-recaptcha-response').val();
			
			// // verify recapcha server side
			// var url = 'http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/templates/verify_recaptcha.php';
			// $.ajax({
			// 	url: url,
			// 	data: {token: recaptcha},
			// 	method: "POST",
			// 	dataType: "text"
			var token = $('input[name=_token]').val();
			console.log(token);
			
			var url = 'http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/templates/verify_nonce.php';

			$.ajax({
				url:url,
				data:{_token: token },
				method: "POST"

			}).done(function(response){
				console.log(response);
				
				response = $.trim(response);
				if (response == 'success') {
					let url = 'https://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/templates/process_contact_form.php';
				let fname = $('#fname').val();
				let lname = $('#lname').val();
				let email = $('#email').val();
				let phonePrefix = $('#phoneprefix').val();
				let phoneNumber = $('#phonenumber').val();
				let fFname = $('#ffname').val();
				let fLname = $('#flsname').val();
				let fEmail = $('#femail').val();
				let fphonePrefix = $('#fphoneprefix').val();
				let fphoneNumber = $('#fphonenumber').val();
				let message = $('#refmessage').val();

				fname = $.trim(fname);
				lname = $.trim(lname);
				email = $.trim(email);
				phoneNumber = phonePrefix + $.trim(phoneNumber);
				fFname = $.trim(fFname);
				fLname = $.trim(fLname);
				fEmail = $.trim(fEmail);
				fphoneNumber = fphonePrefix + $.trim(fphoneNumber);
				message = $.trim(message);


				var referralData= {
					clientFirstName: fname,
					clientLastName: lname,
					clientEmail: email,
					clientPhoneNumber: phoneNumber,
					referralFirstName: fFname,
					referralLastName: fLname,
					referralEmail: fEmail,
					referralPhoneNumber: fphoneNumber,
					clientMessage: message
				}
				
				console.log(referralData);
				
				var successMessage =   '<div class="success-message-container">'+
											'<p class="success-message"> Your reuest has been sent. We will get back to you for further actions. You will be redirected to the user page.... </p>'+
											
										'</div>';
				$('#cssecoReferralForm').append(successMessage);

				// $.ajax({
				// 	url: url,
				// 	data:{ fname: fname, lname: lname, email: email, phoneNumber: phoneNumber, message: message },
				// 	method: "POST"

				// }).done((response)=>{
				// 	console.log('result is: '+response);
				// }).fail((err)=>{
				// 	console.log(err);
					
				// });
				}else
				{
					var failMessage =   '<div class="fail-message-container">'+
												'<p class="fail-message"> An error ocurred. Please refresh the page and try again.</p>'+
											'</div>';
					$('#cssecoContactForm').html(failMessage);
					
				} 
				
			}).fail(function(response){
					var failMessage =   '<div class="fail-message-container">'+
												'<p class="fail-message">  An error ocurred. Please refresh the page and try again.</p>'+
											'</div>';
					$('#cssecoContactForm').html(failMessage);
				
				
			});
			
		} 
	});

	
});