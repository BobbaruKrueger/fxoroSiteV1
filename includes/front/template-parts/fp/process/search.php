<?php
define( 'SHORTINIT', true );
require_once( '../../../../../../../../wp-load.php' );
//$symbols_array = array ('COPP-H19','COFF-K19','CORN-K19','GAS','BRENT-H19','GOLD','NGAS-H19','OIL-H19','PLATINUM','SUG-K19','WHEAT-K19','AUDCAD','EURUSD','EURJPY','EURGBP','EURCHF','CADCHF','CADJPY','CHFJPY','CHFTRY','EURAUD','EURCAD','EURCZK', 'EURDKK','EURHUF','EURILS','EURNOK','EURNZD','EURPLN','EURSEK','EURTRY','EURZAR','GBPAUD','GBPCAD','GBPCHF','GBPHUF', 'GBPJPY','GBPNZD','GBPTRY','GBPUSD','NZDCAD','NZDCHF','NZDJPY','NZDUSD','TRYJPY','USDCAD','USDCHF','USDCNH','USDCZK','USDDKK','USDHKD','USDHUF','USDILS','USDINR','USDJPY','USDMXN','USDNOK','USDPLN','USDRUB','USDSEK','USDSGD','USDTRY','USDZAR','TOSHIBA', 'IBM', 'BMW', 'BAYER','AUS200-H19','EUR50-H19','FRA40-H19','GER30-H19','IT40-H19','JPN225-H19','NAS100-H19','SPA35-F19','SWI20-H19','UK100-H19','US500-H19','BTCUSD');
// $commodities_symbols_array = array ('COPP-H19','COFF-K19','CORN-K19','GAS','BRENT-H19','GOLD','NGAS-H19','OIL-H19','PLATINUM','SUG-H19','WHEAT-K19');
// $forex_symbols_array = array('AUDCAD','EURUSD','EURJPY','EURGBP','EURCHF', 'GBPUSD','CADCHF','CADJPY','CHFJPY','CHFTRY','EURAUD','EURCAD','EURCHF','EURCZK','EURDKK','EURGBP','EURHUF','EURILS','EURJPY','EURNOK','EURNZD','EURPLN','EURSEK','EURTRY','EURUSD','EURZAR','GBPAUD','GBPCAD','GBPCHF','GBPHUF','GBPJPY','GBPNZD','GBPTRY','GBPUSD','NZDCAD','NZDCHF','NZDJPY','NZDUSD','TRYJPY','USDCAD','USDCHF','USDCNH','USDCZK','USDDKK','USDHKD','USDHUF','USDILS','USDINR','USDJPY','USDMXN','USDNOK','USDPLN','USDRUB','USDSEK','USDSGD','USDTRY','USDZAR');
// $shares_symbols_array = array('TOSHIBA', 'IBM', 'BMW', 'BAYER');
// $indices_symbols_array = array('AUS200-H19','EUR50-H19','FRA40-H19','GER30-H19','IT40-H19','JPN225-H19','NAS100-H19','SPA35-F19','SWI20-H19','UK100-H19','US500-H19');
// $crypto_symbols_array = array('BTCUSD');
global $wpdb;


if ( isset( $_GET['search_keyword'] )  && !empty( $_GET['search_keyword'] ) ){
    $search_keyword = $_GET['search_keyword'];

    $query = "SELECT * FROM tickers3 WHERE symbol LIKE '%$search_keyword%'  OR name LIKE '%$search_keyword%' ";

    $results = $wpdb->get_results($query);

    if( count($results) > 0 ){
        $response= array();
        foreach ($results as $key => $value) {
            $response[$value->symbol]['instrument'] = $value->category;
            $response[$value->symbol]['name'] = $value->name;
            $response[$value->symbol]['symbol'] = $value->symbol;
        }
        echo json_encode($response);
    } else echo json_encode('noresults');

    

    // foreach ($symbols_array as $symbol) {
        
    //     $url='http://services.fxoro.com/api/marketdata/prices?symbol='.$symbol;
    //     $ch = curl_init();
    //     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    //     curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    //     curl_setopt( $ch, CURLOPT_URL, $url );
    //     $data = curl_exec($ch);
    //     $data_array= json_decode($data, true);
        

    //     $buyPrice = $data_array['Bid'];
    //     $price = $sellPrice = $data_array['Ask'];
    //     $low = $price - ( $price * 0.1 );
    //     $high = $price + ( $price * 0.1 );
    //     $spread_type = 'Floating';
    //     $traders_sellers = rand(23, 85);
    //     $traders_buyers = 100 - $traders_sellers;
    //     $margin = $sellPrice - $buyPrice;
    //     $closed =  (mt_rand ($low*1000, $high*1000) / 1000);
    //     // $closed = $price + ((rand(0,1)*2-1) * 0.18);
        
    //     // $interval1 = $interval2 = $interval3 = $interval4 = $interval5 = $interval6 = $interval7 = $interval8 = array();
    //     // for ($i=1; $i <9 ; $i++) { 
    //     //     for ($z=0; $z < 60; $z++) { 
    //     //         $randomVal = mt_rand ($low*1000, $high*1000) / 1000;
    //     //         ${'interval'.$i}[] = $randomVal;
    //     //     }
    //     // }
    //     // $interval1 = json_encode($interval1);
    //     // $interval2 = json_encode($interval2);
    //     // $interval3 = json_encode($interval3);
    //     // $interval4 = json_encode($interval4);
    //     // $interval5 = json_encode($interval5);
    //     // $interval6 = json_encode($interval6);
    //     // $interval7 = json_encode($interval7);
    //     // $interval8 = json_encode($interval8);
    //     // $query = "UPDATE tickers3 SET  closed='$closed', interval_1m='$interval1', interval_5m='$interval2', interval_15m='$interval3', interval_30m='$interval4', interval_1h='$interval5', interval_4h='$interval6', interval_1d='$interval7', interval_1w='$interval8', sell='$sellPrice', buy='$buyPrice', spread_type='$spread_type', lowest='$low', highest='$high', traders_buyers='$traders_buyers', traders_sellers='$traders_sellers'  WHERE symbol='$symbol' ";
    //     $query = "UPDATE tickers3 SET  closed='$closed'  WHERE symbol='$symbol' ";
    //     $wpdb->query($query);
    // }
    // $results = array();
    // $category;
    // foreach ($symbols_array as $symbol ) {
    //     if ( in_array( $symbol, $forex_symbols_array ) ) {
    //         $category ='FOREX';
    //     }elseif( in_array( $symbol, $shares_symbols_array ) ) {
    //         $category = 'Shares';
    //     }elseif( in_array( $symbol, $indices_symbols_array ) ) {
    //         $category = 'Indices';
    //     }elseif( in_array( $symbol, $commodities_symbols_array ) ) {
    //         $category = 'Commodities';
    //     }elseif( in_array( $symbol, $crypto_symbols_array ) ) {
    //         $category = 'Cryptocurrency';
    //     }

       
        // $query = "UPDATE tickers3 SET category='$category' WHERE symbol='$symbol'";    
        // $wpdb->query($query);
        
        
    // }

    
  
}