<?php
define( RECAPTCHA_KEY, '6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT' );
define( RECAPTCHA_SECRET, '6Le4j6oUAAAAADdxsZae8X7jqO1dsHx8NcqchRt9' );
define( RECAPTCHA_URL, 'https://www.google.com/recaptcha/api/siteverify' );

if ($_POST) {
    // function that verifies the token against the one stored in google API
    function getCaptcha( $secret_key ){
        
        // get the response from google recaptcha api-> returns a json file
        $response = file_get_contents( RECAPTCHA_URL.'?secret='.RECAPTCHA_SECRET.'&response='.$secret_key );
        
        // decode the response
        $return = json_decode( $response );

        // return the response
        return $return;
    }
    
    // get the recaptcha data 
    $recaptcha_data = getCaptcha( $_POST['token'] );
    
    // check if it succeeded and the score is greater than 0.5 (1.0 is very likely a good interaction, 0.0 is very likely a bot)
    if ( $recaptcha_data->success == true ) {
        echo 'success';
    }else{
        echo 'fail';
        var_dump($recaptcha_data);
    }
}

?> 