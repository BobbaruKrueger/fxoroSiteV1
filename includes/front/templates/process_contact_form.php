<?php 
//check if is a post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // initialize variables
    $fname = $lname = $email = $message = $phone_number = "";
    $contains_html = array();

    // store variables
    if ( !empty($_POST['fname'])) {
        $fname = $_POST['fname'];
    }
    if ( !empty($_POST['lname'])) {
        $lname = $_POST['lname'];
    }
    if ( !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    if ( !empty($_POST['message'])) {
        $message = $_POST['message'];
    }
    if ( !empty($_POST['phoneNumber'])) {
        $phone_number = $_POST['phoneNumber'];
    }

    //validate data
    //check if any of the fields contains html tags
    if ( $fname != strip_tags( $fname) ){ 
        $contains_html[] = 'fname';
    }
    if ( $lname != strip_tags( $lname) ){
        $contains_html[] = 'lname';
    }
    if ( $email != strip_tags( $email) ){
        $contains_html[] = 'email';
    }
    if ( $message != strip_tags( $message) ){
        $contains_html[] = 'refmessage';
    }

    // if there are html tags return and provide error
    if( count( $contains_html) > 0 ) {
        echo json_encode($contains_html);
        return;
    }
    //validate email
    $email = filter_var( $email, FILTER_VALIDATE_EMAIL );

    //validate phone number
    $phone_number = filter_var( $phone_number, FILTER_VALIDATE_INT);

    $data = array(
        'Email' => $email,
        'FirstName' => $fname,
        'LastName' => $lname,
        'Phone' => $phone_number,
        'Message' => $message,
        'Broker' => 'Fxoro',
        'Company' => 'MCA'

    );
    $payload = json_encode($data);
    echo $payload;
    die();
 
    // url to post
    $url = "https://services.fxoro.com/api/customer/contactus";
    // initialize curl
    $ch = curl_init();
    // set options
    curl_setopt( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_POST, true);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload))
    );
    // Submit the POST request
    $result = curl_exec($ch);

    // Close cURL session handle
    curl_close($ch);
    echo $result;
}

?>