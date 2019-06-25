
$(document).ready(()=>{
	
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
		

	$('#cssecoContactForm').validate({
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
			},
			refmessage:{
				required: true,
				minlength:5,
				maxlength:255
			}
		}
	});
		$('#submit').on( 'click', (e)=>{
			e.preventDefault();
			if ( $('#cssecoContactForm').valid() ){
				let url = 'https::/thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/includes/front/templates/process_contact_form.php';
				let fname = $('#fname').val();
				let lname = $('#lname').val();
				let email = $('#email').val();
				let phonePrefix = $('#phoneprefix').val();
				let phoneNumber = $('#phonenumber').val();
				let message = $('#refmessage').val();

				fname = $.trim(fname);
				lname = $.trim(lname);
				email = $.trim(email);
				phoneNumber = phonePrefix + $.trim(phoneNumber);
				message = $.trim(message);

				
				
				$.ajax({
					url: url,
					data:{ fname: fname, lname: lname, email: email, phoneNumber: phoneNumber, message: message },
					method: "POST"

				}).done((response)=>{
					console.log('result is: '+response);
				}).fail((err)=>{
					console.log(err);
					
				});
			} 
		});

	
});