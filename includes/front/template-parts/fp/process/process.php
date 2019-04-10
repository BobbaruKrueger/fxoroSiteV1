
<?php


require('Api.php');
$api = new API();
$api->updateData();

// if stock symbol is sent via POST REQUEST and has a value
// if ( isset($_GET['all']) && !empty($_GET['all']) ) {
//     $symbol = $_GET['all'];

    
    
    
    
    
//     // // create the api url
//     //  $symbol        = $_POST['stockSymbol'];
//     // // $iex_api_token = 'Tpk_619d8288b32140e9b7c3f449a3581490';
//     // // $url           = 'https://sandbox.iexapis.com/beta/stock/'. $symbol .'/quote?token='. $iex_api_token;

//     // $url = 'https://services.fxoro.com/api/marketdata/prices?Symbol='. $symbol;

    
//     // //initiate curl
//     // $ch = curl_init();
//     // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//     // curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
//     // curl_setopt( $ch, CURLOPT_URL, $url );

//     // //execute curl
//     // $data = curl_exec($ch);
//     // //close curl
//     // curl_close($ch);


    
    
    
    
//     // // decode the result from JSoN to Array
//     // $data_array= json_decode($data, true);
    
//     // // store the result
//     // $companyName = $data_array['Symbol'];
//     // //$changePercent = $data_array['changePercent'] . '%';
//     // $buyPrice = $data_array['Bid'];
//     // $sellPrice = $data_array['Ask'];
    
//     // // generate array with necessary information from the api call response
//     // $response = array( 
//     //     'companyName' => $companyName,
//     //     //'changePercent' => $changePercent,
//     //     'buyPrice' => $buyPrice,
//     //     'sellPrice' =>$sellPrice
//     // );
//     // // encode the respunse array to JSON and echo the response for ajax request
//     // echo( json_encode( $response));
    
//     // //var_dump($response);
// }
// // if stock symbol for the graph is sent via POST REQUEST and has a value
// if ( isset($_POST['graphSymbol']) && !empty($_POST['graphSymbol']) ) {
//     // create the api url
//     $symbol        = $_POST['graphSymbol'];
//     $iex_api_token = 'Tpk_619d8288b32140e9b7c3f449a3581490';
//     $url           = 'https://sandbox.iexapis.com/beta/stock/'. $symbol .'/chart/1m?chartCloseOnly=true&token='. $iex_api_token;
    
//     //initiate curl
//     $ch = curl_init();
//     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//     curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
//     curl_setopt( $ch, CURLOPT_URL, $url );

//     //execute curl
//     $data = curl_exec($ch);

//     //close curl
//     curl_close($ch);

//     // decode the result from JSoN to Array
//     $data_array= json_decode($data, true);

//     // generate array with necessary information from the api call response
//     $dates_array = array();
//     for( $i=0; $i < count( $data_array ); $i++ ){
//         $dates_array []= array(
//             'date' => $data_array[$i]['date'], 
//             'close' => $data_array[$i]['close']
//         );
//     }
//     // encode the dates array to JSON and echo the response for ajax request    
//     echo(json_encode($dates_array));

// }

// // if ( isset($_POST['fromCurrency']) && !empty($_POST['fromCurrency']) && isset($_POST['toCurrency']) && !empty($_POST['toCurrency']) ) {

// //     $fromCurrency        = $_POST['fromCurrency'];
// //     $toCurrency        = $_POST['toCurrency'];
// //     $iex_api_token = 'Tpk_619d8288b32140e9b7c3f449a3581490';
// //     $url           = 'https://sandbox.iexapis.com/beta/fx/rate/'. $fromCurrency .'/'. $toCurrency .'?token='. $iex_api_token;
    
// //     //initiate curl
// //     $ch = curl_init();
// //     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
// //     curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
// //     curl_setopt( $ch, CURLOPT_URL, $url );

// //     //execute curl
// //     $data = curl_exec($ch);

// //     //close curl
// //     curl_close($ch);

// //     //var_dump($data);

    
// //     // $data_array= json_decode($data, true);
// //     // $dates_array = array();
// //     // for( $i=0; $i < count( $data_array ); $i++ ){
// //     //     $dates_array []= array(
// //     //         'date' => $data_array[$i]['date'], 
// //     //         'close' => $data_array[$i]['close']
// //     //     );
// //     // }
        
// //     // echo(json_encode($dates_array));

// // }


// 
?>