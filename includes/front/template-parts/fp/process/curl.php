<?php

//var_dump($argv);
$symbol = $argv[1];
$url = 'https://services.fxoro.com/api/marketdata/prices?Symbol='. $symbol;
        


//initiate curl
$ch = curl_init();
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_URL, $url );

//execute curl
$data = curl_exec($ch);
//close curl
curl_close($ch);       

// decode the result from JSoN to Array
$data_array= json_decode($data, true);
echo  $data;
