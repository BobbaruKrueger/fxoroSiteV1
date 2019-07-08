<?php
// start the session object
session_start();

// check if the page is visited via post and the session token exists
if ( $_SERVER["REQUEST_METHOD"] =="POST" && isset( $_SESSION['_token'])) {
    // get the session token
    $session_token = $_SESSION['_token'];
    // get the form token
    $form_token = $_POST['_token'];

    // echo $session_token;
    // echo'<hr>';
    // echo $form_token;

    // check if the token match
    if( $session_token == $form_token ){
        // return success to the ajax request
        echo 'success';
    }else{
        // return fail to the ajax request
        echo ('fail');
        echo ('<br>');
        echo ($session_token);
        echo ('<br>');
        echo ($form_token);
    }

}else{
    echo'no session';
}

?>