$(document).ready(function(){
    // // get google recaptcha 
	// grecaptcha.ready(function() {
	// 	grecaptcha.execute('6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', {action: 'register_form'}).then(function(token) {
	// 	//    console.log(token);
	// 	   document.getElementById('g-recaptcha-response').value = token;
	// 	});
	// });
	
	const libphonenumber = window.libphonenumber;

	let currentip = "";
	let currentcountrycode = "";
	let currentcountryname = "";

	let apiToken = {
		"Token": "A82BB7E8-C1CA-46A6-B470-7DDBDB2D938E"
	};
	

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


	function watchOptions(){
		let selected = $('select#country option:selected').text();
								
		$('select#country').on('change', function() {
			selected = this.value;
			$('#phoneprefix').val( '+' + selected);
		});
	}
	
	// create methot to validate if the phone number is valid
	
	jQuery.validator.addMethod( "isValidPhoneNumber", function(value, element){
		
		let result =  libphonenumber.parsePhoneNumber( $('#phoneprefix').val() + value ).isValid();
		return result;

	},"Please enter a valid Phone Number.");
		

	$('#register_form').validate({
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
			if ( $(element).is('#phonenumber') ) {
				error.appendTo( element.closest(".form-group") );
			}else{
				error.insertAfter(element);
			}
			
		},
       	rules:{
			email:{
				required: true,
				minlength: 8,
				email: true
			},
			fname:{
				required: true,
				minlength: 2,
			},
			lname:{
				required: true,
				minlength: 2
			},
			phone:{
				required: true,
				digits: true,
				minlength: 6,
				isValidPhoneNumber: true
			}
		}
	});
	$('#submit').on( 'click', (e)=>{

		e.preventDefault();		
		
		if ( $('#register_form').valid() ){
			
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
                 
                response = $.trim(response);
                
				if (response == 'success') {
                    console.log(response);

					let fname = $('#fname').val();
					let lname = $('#lname').val();
					let email = $('#email').val();
					let phonePrefix = $('#phoneprefix').val();
					let phoneNumber = $('#phonenumber').val();
	
					fname = $.trim(fname); 
					lname = $.trim(lname);
					email = $.trim(email);
					phoneNumber = phonePrefix + $.trim(phoneNumber);
                    clientData = {
                        EMail: email,
                        FirstName: fname,
                        LastName: lname,
                        Language: "en",
                        Country: currentcountryname,
                        PhoneCountryCode:phonePrefix,
                        PhoneNumber: phoneNumber,
                        CampaignName: "",
                        Advertiser: "",
                        Referrer: "",
                        CustomField: "",
                        AcceptTermsAndConditions: true,
                        ApproveReceiveCommercial: true,
                        IPAddress:currentip,
                        IPCountry:ipcountry
                    };
	 
					var successMessage =   '<div class="success-message-container">'+
												'<p class="success-message">  You will be redirected to the next step in the user registration process... </p>'+
											'</div>';
					$('#register_form').html(successMessage);
					
					
                    // redirect url
                    var url = "http://qa.fxoro.com/register/";
                    // redirect to the next step on qa.fxoro.com
                    setInterval(function(){
                        $.redirect(url, clientData);
                    }, 2000);
				}else
				{
                    console.log(response);
                    
					var failMessage =   '<div class="fail-message-container">'+
                                            '<p class="fail-message"> An error ocurred. Please refresh the page and try again.</p>'+
                                        '</div>';
					$('#register_form').html(failMessage);
					
				}
				
			}).fail(function(response){
					var failMessage =   '<div class="fail-message-container">'+
                                            '<p class="fail-message">  An error ocurred. Please refresh the page and try again.</p>'+
                                        '</div>';
                    $('#register_form').html(failMessage);
				
				
			});

		} 
		
	});
});