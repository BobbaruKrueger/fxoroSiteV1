$(document).ready( function (){
    // // get google recaptcha 
	// grecaptcha.ready(function() {
	// 	grecaptcha.execute('6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', {action: 'become_professional'}).then(function(token) {
	// 	//    console.log(token);
	// 	   document.getElementById('g-recaptcha-response').value = token;
	// 	});
	// });

    var trading_volume_option = portfolio_option = false;
    var user_information_form = 'new';
    var experience_option='';
    var experience_answer='';
    var netSavings='';
    var userFormIsValid = false;
    var total_trading_volume = 0;
    var sharesAndBonds_trading_volume = 0;
    var derivatives_trading_volume = 0;
    var otc_derivatives_trading_volume = 0;
    var passed_array= [];
    var failed_array = [];
    var form_errors = [];
    var form_field_register_fname = form_field_register_lname = form_field_register_email = form_field_register_phone_number = '';
    var form_field_login_email = form_field_login_password  = '';
    var urlParams = new URLSearchParams(window.location.search);
    var tradingVolume = urlParams.get('volume');
    if ( tradingVolume == 'on' ){
        tradingVolume = true;
    }
    var portfolio = urlParams.get('portfolio');
    if ( portfolio == 'on' ){
        portfolio = true;
    }
    var experience = urlParams.get('experience');
    if ( experience == 'on' ){
        experience = true;
    }

    var currentip;
    var currentcountryname;
    var ipcountry;
    
    // bug fix
    // if the page is loadind slow and the user checks one of the options with  further questions
    // when page is loaded check the values of inputs and if yes selected display the questions fields

    // trading volume
    if ( $('input[name=trading_volume]:checked' ).val() == 'yes' ) {
        $('.trading-volume-questions').slideDown().css('display', 'block');
            trading_volume_option = true;
    }
    // portfolio
    if ( $('input[name=portfolio]:checked' ).val() == 'yes' ) {
        $('.portfolio-questions').slideDown().css('display', 'block');
            portfolio = true;
    }
    // experience yes role institution
    if ( $('input[name=experience]:checked' ).val() == 'yes_role_institution' ) {
        $('.experience-role-questions').slideDown().css('display', 'block');
    }
    // experience qualification
    if ( $('input[name=experience]:checked' ).val() == 'yes_qualification' ) {
        $('.experience-qualification-questions').slideDown().css('display', 'block');
    }




    // on q1 option change
    $('input[name=trading_volume]').on('change', function(){
       
        // get q1 option
        var q1Value = $( 'input[name=trading_volume]:checked' ).val();
        // toggle q1 questions-group
        if ( q1Value == 'yes'){
            $('.trading-volume-questions').slideDown().css('display', 'block');
            trading_volume_option = true;
            // toggleQuestionsBox('.trading-volume-questions');
        }else{
            $('.trading-volume-questions').slideUp();
            trading_volume_option = false;
        }
    });

    // on q2 option change
    $('input[name=portfolio]').on('change', function(){
       
        // get q2 option
        var q2Value = $( 'input[name=portfolio]:checked' ).val();
        // toggle q2 questions-group
        if ( q2Value == 'yes'){
            $('.portfolio-questions').slideDown().css('display', 'block');
            portfolio_option = true;
            // toggleQuestionsBox('.portfolio-questions'); 
        }else{
            $('.portfolio-questions').slideUp();
            portfolio_option = false;
        }
    });

    // on q3 option change
    $('input[name=experience]').on('change', function(){
       
        // get q2 option
        var q3Value = $( 'input[name=experience]:checked' ).val();
        
        
        // toggle q3 questions role-group
        if ( q3Value == 'yes_role_institution'){
            $('.experience-role-questions').slideDown().css('display', 'block');
            // toggleQuestionsBox('.experience-role-questions');
           
        }else{
            $('.experience-role-questions').slideUp();
        }
        // toggle q3 questions qualification-group
        if ( q3Value == 'yes_qualification'){
            $('.experience-qualification-questions').slideDown().css('display', 'block');
            // $('.experience-role-questions').slideUp().css('display', 'none');
            // toggleQuestionsBox('.experience-qualification-questions');
            
        }else{
            $('.experience-qualification-questions').slideUp();
        } 
        
    });
    

    // toggle resistration-login forms and buttons
    $('#already_registered').on( 'click', function (e) {
        e.preventDefault();  
        $(this).closest('.already-registered').css('display', 'none');
        $('#not_registered').closest('.not-registered').css('display', 'block');
        $('.registration-form').slideUp();
        $('.login-form').slideDown();
        user_information_form = "exists";
    });
    $('#not_registered').on( 'click', function (e) {
        e.preventDefault();
        $(this).closest('.not-registered').css('display', 'none');
        $('#already_registered').closest('.already-registered').css('display', 'block');
        $('.registration-form').slideDown();
        $('.login-form').slideUp();
        user_information_form = "new";
    });
    // -------- validation criteria :
    // - pass min 2 requirements
    // - confirm  qualitative_assessment 
    // - confirm  declaration of understanding 
    // - confirm  CAPTCHA 
    
    // store data for validation

    // QUESTION 1 VALIDATION
    // TRADING VOLUME >= 40
    // check if trading volume is one of the criterias selected by the user
// initialize form validator
$('#professional-questionnaire').validate({
    onkeyup: function(element) { 
        if( $(element).valid() ){
            $(element).closest('.form-group').find('.isValid').css('display', 'block');
            $(element).closest('.form-group').find('.isError').css('display', 'none');
        }else{
            $(element).closest('.form-group').find('.isValid').css('display', 'none');
            $(element).closest('.form-group').find('.isError').css('display', 'block');
        }
    },
    errorPlacement: function(error, element) {
        if ( $(element).is('#phonenumber') || $(element).is('#trading_volume_yes') || $(element).is('#portfolio_yes') || $(element).is('#experience_yes_role_institution') || $(element).is('#qualitative_assessment_yes') || $(element).is('#declaration_of_understanding') ) {
            error.appendTo( element.closest(".form-group") );
        }else{
            error.insertAfter(element);
        }
        
    },
    rules:{
        experience_role: {
            required: {
                depends: function(element){
                    return experience_option == "role_institution"; 
                }
            },
            minlength: 5
        },
        experience_qualification: {
            required: {
                depends: function(element){
                    return experience_option == "qualification"; 
                }
            },
            minlength: 5
        },
        email:{
            required: {
                depends: function(element){
                    return user_information_form == "new"; 
                }
            },
            minlength: 8,
            email: true
        },
        fname:{
            required: {
                depends: function(element){
                    return user_information_form == "new"; 
                }
            },
            minlength: 2
        },
        lname:{
            required: {
                depends: function(element){
                    return user_information_form == "new"; 
                }
            },
            minlength: 2
        },
        phone:{
            required: {
                depends: function(element){
                    return user_information_form == "new"; 
                }
            },
            digits: true,
            minlength: 6,
            isValidPhoneNumber: true
        },
        login_email:{
            required: {
                depends: function(element){
                    return user_information_form == "exists"; 
                }
            },
            minlength: 8,
            email: true
        },
        password:{
            required: {
                depends: function(element){
                    return user_information_form == "exists"; 
                }
            },
            minlength: 4
        },
        trading_volume:{
            required:true

        },
        experience:{
            required:true
        },
        portfolio:{
            required:true
        },
        qualitative_assessment:{
            required:true
        },
        declaration_of_understanding:{
            required:true
        }

    }
});
    // on submit
    $('#submit-questionnaire').on( 'click', function(e){

        // prevent submission
        e.preventDefault();

        // reset form_errors
        var form_errors = [];

        $('.errors').text('');
        // if trading volume is a selected criteria on page 
        if (tradingVolume) {
            // initialize values
            sharesAndBonds_trading_volume = derivatives_trading_volume = otc_derivatives_trading_volume = 0;
            // if the trading volume option is yes
            if(trading_volume_option){
                
                // get values    
                sharesAndBonds_trading_volume = $('input[name=trading-volume-shares-bonds]:checked').val();
                derivatives_trading_volume = $('input[name=trading-volume-derivatives]:checked').val();
                otc_derivatives_trading_volume = $('input[name=trading-volume-otc-derivatives]:checked').val();
               if (otc_derivatives_trading_volume == null) otc_derivatives_trading_volume = 0;
               if (derivatives_trading_volume == null) derivatives_trading_volume = 0;
               if (sharesAndBonds_trading_volume == null) sharesAndBonds_trading_volume = 0;
                // parseInt
                sharesAndBonds_trading_volume = parseInt(sharesAndBonds_trading_volume);
                derivatives_trading_volume = parseInt(derivatives_trading_volume);
                otc_derivatives_trading_volume = parseInt(otc_derivatives_trading_volume);
                // calculate total trading volume
                total_trading_volume = sharesAndBonds_trading_volume + derivatives_trading_volume + otc_derivatives_trading_volume; 
                
                if ( total_trading_volume >= 40 ){
                    passed_array = passed_array.filter(function(item) { 
                        return item !== 'trading_volume';
                    });
                    failed_array = failed_array.filter(function(item) { 
                        return item !== 'trading_volume';
                    });
                    
                    passed_array.push('trading_volume');
                    
                }else{
                    passed_array = passed_array.filter(function(item) { 
                        return item !== 'trading_volume';
                    });
                    failed_array = failed_array.filter(function(item) { 
                        return item !== 'trading_volume';
                    });
                    failed_array.push('trading_volume');
                }
               
            }else if( !trading_volume_option ){ // if the trading volume is selected but the option is checked as no or no option si chosen
                passed_array = passed_array.filter(function(item) { 
                    return item !== 'trading_volume';
                });
                failed_array = failed_array.filter(function(item) { 
                    return item !== 'trading_volume';
                });
                failed_array.push('trading_volume');
                           
            }
        }
        // if portfolio is a selected criteria on page
        if (portfolio) {
            
            // if the portfolio option is yes
            if(portfolio_option){
                // get values    
                netSavings = $('input[name=portfolio-net-savings]:checked').val();
                
                
                if ( netSavings ){
                    passed_array = passed_array.filter(function(item) { 
                        return item !== 'net_savings';
                    });
                    failed_array = failed_array.filter(function(item) { 
                        return item !== 'net_savings';
                    });
                    passed_array.push('net_savings');
                    
                }else{
                    passed_array = passed_array.filter(function(item) { 
                        return item !== 'net_savings';
                    });
                    failed_array = failed_array.filter(function(item) { 
                        return item !== 'net_savings';
                    });
                    failed_array.push('net_savings');
                    
                }
            }else if( !portfolio_option ){ 
                passed_array = passed_array.filter(function(item) { 
                    return item !== 'net_savings';
                });
                failed_array = failed_array.filter(function(item) { 
                    return item !== 'net_savings';
                });
                failed_array.push('net_savings');
    
            }
        }
        if (experience) {
 
            var curr_experience = $('input[name=experience]:checked').val();
           //  get experience option
            switch (curr_experience) {
                case 'yes_role_institution':
                    experience_option = 'role_institution';
                    break;
                case 'yes_qualification':
                    experience_option = 'qualification';
                    break;
            
                default:
                    experience_option  = 'none';
                    break;
            }
            
            // if the experience option is yes role institution
            if(experience_option == "role_institution"){
                
                var answer = $('#role').val();
 
                experience_answer = answer;

                passed_array = passed_array.filter(function(item) { 
                    return item !== 'experience';
                });
                failed_array = failed_array.filter(function(item) { 
                    return item !== 'experience';
                });
                passed_array.push('experience');

            // if the experience option is yes role institution
            }else if( experience_option == "qualification" ){ 
                var answer = $('#qualification').val();
                experience_answer = answer;

                passed_array = passed_array.filter(function(item) { 
                    return item !== 'experience';
                });
                failed_array = failed_array.filter(function(item) { 
                    return item !== 'experience';
                });
                passed_array.push('experience');
            // if the experience option is no
            }else if( experience_option == "none" ){
                passed_array = passed_array.filter(function(item) { 
                    return item !== 'experience';
                });
                failed_array = failed_array.filter(function(item) { 
                    return item !== 'experience';
                });
                failed_array.push('experience');   
                
            }
        }

        // qualitative assessment option must be yes
        var qualitative_assessment_option = $('input[name=qualitative_assessment]:checked').val();

        if ( qualitative_assessment_option == "yes") {
            passed_array = passed_array.filter(function(item) { 
                return item !== 'qualitative_assessment';
            });
            failed_array = failed_array.filter(function(item) { 
                return item !== 'qualitative_assessment';
            });
           
            
            
        } else {
            passed_array = passed_array.filter(function(item) { 
                return item !== 'qualitative_assessment';
            });
            failed_array = failed_array.filter(function(item) { 
                return item !== 'qualitative_assessment';
            });
            failed_array.push('qualitative_assessment');
           
        }

        // Must accept declaration of understanding
        var declaration_of_understanding = $('#declaration_of_understanding').is(':checked');
        if (declaration_of_understanding){
            passed_array = passed_array.filter(function(item) { 
                return item !== 'declaration_of_understanding';
            });
            failed_array = failed_array.filter(function(item) { 
                return item !== 'declaration_of_understanding';
            });
            // passed_array.push('declaration_of_understanding');
        }else{
            passed_array = passed_array.filter(function(item) { 
                return item !== 'declaration_of_understanding';
            });
            failed_array = failed_array.filter(function(item) { 
                return item !== 'declaration_of_understanding';
            });
            failed_array.push('declaration_of_understanding');
        }
        
        

        // check if passed
        if ( failed_array.length > 0) {
            // $.each( failed_array, function (index, failed_section) {
            //     if ( failed_section == "trading_volume") {
                      
            //         form_errors.push('<a href="#trading-volume">The trading volume must be minimum 40.</a>');
            //     }
            //     if ( failed_section == "net_savings") {
            //         form_errors.push('<a href="#portfolio">Your must choose one of the net savings and investments options.');
            //     }
            //     if ( failed_section == "experience") {
            //         form_errors.push('<a href="#experience">You have to specify your experience or qualification.');
            //     }
            //     if ( failed_section == "qualitative_assessment") {
            //         form_errors.push('<a href="#qualitative-assessment">You must accespt the qualitative assessment.');
            //     }
            //     if ( failed_section == "declaration_of_understanding") {
            //         form_errors.push('<a href="#declaration-of-understanding">You must confirm the declaration of understanding. ');
            //     }
                
            // });
            
            if ( $.inArray('trading_volume', failed_array) > -1){
                // check if the criteria of minimum 2 required to pass
                if ( passed_array.length >= 2 ) {
                    
                } else {
                    // add to error array
                    form_errors.push('<a href="#trading-volume">The trading volume must be minimum 40.</a>');
                }
            }
            if ( $.inArray('net_savings', failed_array) > -1){
                // check if the criteria of minimum 2 required to pass
                if ( passed_array.length >= 2 ) {
                    
                } else {
                    
                    // add to error array
                    form_errors.push('<a href="#portfolio">Your must choose one of the net savings and investments options.');
                }
            }
            if ( $.inArray('experience', failed_array) > -1){
                // check if the criteria of minimum 2 required to pass
                if ( passed_array.length >= 2 ) {
                    
                } else {
                    // add to error array
                    form_errors.push('<a href="#experience">You have to specify your experience or qualification.');
                }
            }
            
            if ( $.inArray('qualitative_assessment', failed_array) > -1){           
                // add to error array
                form_errors.push('<a href="#qualitative-assessment">You must accespt the qualitative assessment.');      
            }

            if ( $.inArray('declaration_of_understanding', failed_array) > -1){
                // add to error array
                form_errors.push('<a href="#declaration-of-understanding">You must confirm the declaration of understanding. ');
            }
            //validate the userforms and experience 
            if ( !$('#professional-questionnaire').valid() ){
                if ( user_information_form =="new" ) {
                    form_errors.push('<a href="#registration-form">There is an error on the user details form.');
                    
                }else if( user_information_form =="exists" ){
                    form_errors.push('<a href="#login-form">There is an error on the user details form.');
                }
                
                var inputFailed = '';
                var validator = $('#professional-questionnaire').validate();
                console.log(validator.errorMap);
                if( validator.errorMap.hasOwnProperty('experience_role') || validator.errorMap.hasOwnProperty('experience_qualification') ){
                    
                    inputFailed = '#experience';
                    form_errors.push('<a href="'+ inputFailed +'"> There is an error on the eperience field.');
                }else if( validator.errorMap.hasOwnProperty('fname') || validator.errorMap.hasOwnProperty('lname') || validator.errorMap.hasOwnProperty('email')|| validator.errorMap.hasOwnProperty('phone')){
                    inputFailed = '#registration-form';
                    form_errors.push('<a href="'+ inputFailed +'">There is an error on the user registration form.');
                }else if( validator.errorMap.hasOwnProperty('fname') || validator.errorMap.hasOwnProperty('lname') ){
                    inputFailed = '#login-form';
                    form_errors.push('<a href="'+ inputFailed +'">There is an error on the user login form.');
                }

                userFormIsValid = false;
            }else{
                userFormIsValid = true;
            }

            if (form_errors.length > 0) {
                $.each( form_errors, function(index, errorMessage){
                    $('.errors').append('<li>' + errorMessage +'</li>');
            });
            $('html, body').animate({ scrollTop: $('.errors').offset().top }, 'slow');
                
            } else {
                
            }
        } else {
            if ( !$('#professional-questionnaire').valid() ){

                $('html, body').animate({ scrollTop: $('.already-registered').offset().top }, 'slow');
                // if ( user_information_form =="new" ) {
                //     form_errors.push('<a href="#registration-form">There is an error on the user details form.');
                    
                // }else if( user_information_form =="exists" ){
                //     form_errors.push('<a href="#login-form">There is an error on the user details form.');
                // }
                
                // var inputFailed = '';
                // var validator = $('#professional-questionnaire').validate();
                // console.log(validator.errorMap);
                // if( validator.errorMap.hasOwnProperty('experience_role') || validator.errorMap.hasOwnProperty('experience_qualification') ){
                    
                //     inputFailed = '#experience';
                //     form_errors.push('<a href="'+ inputFailed +'"> There is an error on the eperience field.');
                // }else if( validator.errorMap.hasOwnProperty('fname') || validator.errorMap.hasOwnProperty('lname') || validator.errorMap.hasOwnProperty('email')|| validator.errorMap.hasOwnProperty('phone')){
                //     inputFailed = '#registration-form';
                //     form_errors.push('<a href="'+ inputFailed +'">There is an error on the user registration form.');
                // }else if( validator.errorMap.hasOwnProperty('fname') || validator.errorMap.hasOwnProperty('lname') ){
                //     inputFailed = '#login-form';
                //     form_errors.push('<a href="'+ inputFailed +'">There is an error on the user login form.');
                // }
                
                // if (form_errors.length > 0) {
                //     $.each( form_errors, function(index, errorMessage){
                //         $('.errors').append('<li>' + errorMessage +'</li>');
                //     });
                //     $('html, body').animate({ scrollTop: $('.errors').offset().top }, 'slow');
                // }    
                userFormIsValid = false;
            }else{
                userFormIsValid = true;
            }

        }
       
        // submit the form and redirect 
        if( userFormIsValid == true && failed_array.length == 0 ){


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
                    
                    // get form data
                    var ProfTradingVolume = trading_volume_option;
                    var ProfPortfolio = portfolio_option;
                    var ProfExperience = experience_option;
                    var AnyExperience = experience;
                    var HaveYouTraded = tradingVolume;
                    var FinanceInstrumnet = portfolio;
                    var ConfirmSavings = netSavings;
                    var JobTitle = experience_answer;
                    var JobDescription = experience_answer;
                    var UnderstandRisk = qualitative_assessment_option;

                    var Broker = "Fxoro";
                    var Company = "MCA";

                    //  create the client iformation data object
                    var professional_client_data = {
                        ProfTradingVolume: ProfTradingVolume,
                        ProfPortfolio: ProfPortfolio,
                        ProfExperience: ProfExperience,
                        AnyExperience: AnyExperience,
                        HaveYouTraded: HaveYouTraded,
                        SharesAndBonds: sharesAndBonds_trading_volume,
                        ExchangeTraded: derivatives_trading_volume,
                        OTCDerivatives: otc_derivatives_trading_volume,
                        FinanceInstrumnet: FinanceInstrumnet,
                        ConfirmSavings: ConfirmSavings,
                        UnderstandRisk: UnderstandRisk,
                        Broker: Broker,
                        Company: Company
                    }; 
                    // add email to the client object
                    if( user_information_form == "new" ){
                        professional_client_data.Email = $('#email').val();
                    }else if( user_information_form == "exists" ){
                        professional_client_data.Email = $('#login-email').val();
                    }
                    // add the Jobtitle and jobdescription to the object
                    if(experience_option == "role_institution"){
                        professional_client_data.JobTitle = JobTitle;
                        professional_client_data.JobDescription = "";
                    }else if( experience_option == "qualification" ){ 
                        professional_client_data.JobTitle = "";
                        professional_client_data.JobDescription = JobDescription;
                    }else if( experience_option == "none" ){
                        pprofessional_client_data.JobTitle = "";
                        professional_client_data.JobDescription = "";
                    }

                    console.log(professional_client_data);
                    
                    // ajax to https://services.fxoro.com/api/questionnaire/createqualifyprofquest
                    var url = "https://services.fxoro.com/api/questionnaire/createqualifyprofquest";
                    // $.ajax({
                    //     url: url,
                    //     data: professional_client_data,
                    //     method: "POST"
                    // }).done( function(response){
                    //     console.log(response);
                        
                    // }).fail( function(response){
                    //     console.log(response);
                        
                    // });
                    //  if ajax done   flash message and then redirect

                    //  flash message of success
                    var message =   '<div class="success-message-container">'+
                                        '<p class="success-message"> Your reuest has been sent. We will get back to you for further actions. You will be redirected to the user page.... </p>'+
                                        
                                    '</div>';
                    $('#professional-questionnaire').append(message);

                    // if new user
                    if( user_information_form == "new" ){
                        form_field_register_fname = $('#fname').val();
                        form_field_register_lname = $('#lname').val();
                        form_field_register_email = $('#email').val();
                        form_field_register_phone_prefix = $('#phoneprefix').val();
                        form_field_register_phone_number = $('#phonenumber').val();


                        clientData = {
                            EMail: form_field_register_email,
                            FirstName: form_field_register_fname,
                            LastName: form_field_register_lname,
                            Language: "en",
                            Country: currentcountryname,
                            PhoneCountryCode:form_field_register_phone_prefix,
                            PhoneNumber: form_field_register_phone_number,
                            CampaignName: "",
                            Advertiser: "",
                            Referrer: "",
                            CustomField: "",
                            AcceptTermsAndConditions: true,
                            ApproveReceiveCommercial: true,
                            IPAddress:currentip,
                            IPCountry:ipcountry
                        };
                        
                        // var redirect_link = '<p class="redirect-link"> If you are not redirected automatically <a href="#">click here!</a></p>';

                        // // add the redirect link if not redirected automatically
                        // $('.success-message').append(redirect_link);

                        // redirect to http://qa.fxoro.com/register/ as a post method
                        var url = "http://qa.fxoro.com/register/";
                        setInterval(function(){
                            $.redirect(url, clientData);
                        }, 5000);


                        // $.ajax({
                        //     url: url,
                        //     data: clientData,
                        //     method:"POST"
                        // }).done(function(response){
                        //     console.log(response);
                            
                        // }).fail(function(response){
                        //     console.log(response);
                            
                        // });
                    // if user exists
                    }else  if ( user_information_form == "exists" ){
                        // get form data
                        
                        form_field_login_email =  $('#login-email').val();
                        form_field_login_password  =  $('#password').val();

                        clientData = {
                            EMail: form_field_login_email,
                            Password: form_field_login_password,
                        };

                        // var redirect_link = '<p class="redirect-link"> If you are not redirected automatically <a href="#">click here!</a></p>';

                        // // add the redirect link if not redirected automatically
                        // $('.success-message').append(redirect_link);

                        // redirect to http://qa.fxoro.com/login/
                        console.log(clientData);
                        
                    
                    var url = "http://qa.fxoro.com/login/";
                    setInterval(function(){
                        $.redirect(url, clientData);
                    }, 5000);
                    }  else{
                        
                        console.log('!!!!!');
                    }




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

         

            

    }else{
        console.log('else');
        
    }

    });
    // phone number validation
    const libphonenumber = window.libphonenumber;

    // let currentip = "";
    // let currentcountrycode = "";
    // let currentcountryname = "";

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

    jQuery.validator.addMethod( 'userExists', function(value, element){
        var userEmail = $('#login-email').val();
        var userPassword= $('#password').val();
        var url="";
        
        $.ajax({
            url: url,
            method: "POST",
            data:{ email: userEmail, password: userPassword}
        }).done( function(response){
            if (response == 'success') {
                return true;
            } else {
                return false;
            }
        }).fail( function (response){
            console.log('connecTion error');
            
        });
    }, 'The email or password you provided are incorrect. No user found.');

    


});
function toggleQuestionsBox(currentQuestion){
    var questionBoxes = [ '.trading-volume-questions', '.portfolio-questions', '.experience-role-questions', '.experience-qualification-questions'];
    $.each( questionBoxes, function( index, questionBox ){
        if( questionBox !== currentQuestion ){
            if( $(questionBox).is( ':visible') ){
                $(questionBox).toggle('slow');
            }
        }
    });
}

