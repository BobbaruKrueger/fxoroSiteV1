<?php

class API 
{
    
    protected $commodities_symbols_array = array ('COPP-H19','COFF-H19','CORN-K19','GAS','BRENT-H19','GOLD'/*,'NGAS-H19','OIL-H19','PLATINUM','SUG-H19','WHEAT-K19'*/);
    protected $forex_symbols_array = array('AUDCAD','EURUSD','EURJPY','EURGBP','EURCHF', 'GBPUSD'/*,'CADCHF','CADJPY','CHFJPY''CHFTRY','EURAUD','EURCAD','EURCHF','EURCZK','EURDKK','EURGBP','EURHUF','EURILS','EURJPY','EURNOK','EURNZD','EURPLN','EURSEK','EURTRY','EURUSD','EURZAR','GBPAUD','GBPCAD','GBPCHF','GBPHUF','GBPJPY','GBPNZD','GBPTRY','GBPUSD','NZDCAD','NZDCHF','NZDJPY','NZDUSD','TRYJPY','USDCAD','USDCHF','USDCNH','USDCZK','USDDKK','USDHKD','USDHUF','USDILS','USDINR','USDJPY','USDMXN','USDNOK','USDPLN','USDRUB','USDSEK','USDSGD','USDTRY','USDZAR'*/);
    protected $shares_symbols_array = array('TOSHIBA', 'IBM', 'BMW', 'BAYER');
    protected $indices_symbols_array = array('AUS200-H19','EUR50-H19','FRA40-H19','GER30-H19','IT40-H19'/*,'JPN225-H19','NAS100-H19','SPA35-F19','SWI20-H19','UK100-H19','US500-H19'*/);

    //protected $base_url = 'https://services.fxoro.com/api/marketdata/';

    public $buyPrice, $sellPrice, $changePercent,  $img_output, $tickerName;

    public  $data_result =  array(
        'Forex' => array(),
        'Shares' => array(),
        'Commodities'=>array(),
        'Indices' =>  array()
    );

    public function getSymbolData( $symbol ){
        $this->generateTickerName($symbol);
        $this->getPrices($symbol);
        if ( in_array( $symbol, $this->forex_symbols_array ) ) {          
            $this->getForexGraphData($symbol);
        }else{
            $this->getGraphData($symbol);

        }
    }

    public function getData(){
        foreach ( $this->forex_symbols_array as $forex ) {
            $this->generateTickerName($forex);
            $this->getPrices($forex);
            $this->getForexGraphData($forex);
        }
        foreach ( $this->indices_symbols_array as $index ) {
            $this->CreateData($index);
        }
        foreach ( $this->commodities_symbols_array as $commodity ) {
            $this->CreateData($commodity);
        }
        foreach ( $this->shares_symbols_array as $share ) {
            $this->CreateData($share);
        }
    }
    public function updateData(){
        $this->getData();
        
        echo ( json_encode( $this->data_result ) );
    }


    protected function CreateData($symbol){
        //$this->getImageOutput($symbol);
        $this->generateTickerName($symbol);
        $this->getPrices($symbol);
        $this->getGraphData($symbol);
    }
    

    protected function getForexGraphData($symbol){
        $from = substr($symbol, 0, 3);
        $to = substr($symbol, -3);
        
        $base_api_url = 'https://api.exchangeratesapi.io/';
        
        $today = date('Y-m-d');
        
        $start_day = date( 'Y-m-d', strtotime( '-30 days', strtotime($today) ) );
        
        $call_url = $base_api_url . 'history?start_at=' . $start_day . '&end_at=' . $today.'&base=' .$from. '&symbols='.$to;

        //initiate curl
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_URL, $call_url );
        
        //execute curl
        $data = curl_exec($ch);
        //close curl
        curl_close($ch);       
        
        // decode the result from JSoN to Array
        $data_array= json_decode($data, true);

        $graph_data= array();

        foreach($data_array['rates'] as $key =>$rate){
            $graph_data['Values'][] = $rate[$to];
            $graph_data['Dates'][] = $key;
        }
        //sort array by date
        array_multisort($graph_data['Dates'], SORT_DESC, $graph_data['Values']);

        
        //store the data
        $this->data_result['Forex'][$symbol]['Graph'][] = $graph_data;
    }

    function sortArray($a, $b){
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    protected  function getGraphData($symbol){
        $data = array();
        $today = date('Y/m/d');

        for ($i=0; $i < 30; $i++) { 
            $data['Dates'][] = date( 'Y/m/d', strtotime( '-'.$i.'days', strtotime($today) ) );
            $data['Values'][] =  rand(1,5);
        }

        if ( in_array( $symbol, $this->forex_symbols_array ) ) {

           
            $this->data_result['Forex'][$symbol]['Graph'][] = $data;
           
        }
        if ( in_array( $symbol, $this->shares_symbols_array ) ) {

            $this->data_result['Shares'][$symbol]['Graph'][] = $data;
        }
        if ( in_array( $symbol, $this->commodities_symbols_array ) ) {

            $this->data_result['Commodities'][$symbol]['Graph'][] = $data;
        }
        if ( in_array( $symbol, $this->indices_symbols_array ) ) {

            $this->data_result['Indices'][$symbol]['Graph'][] = $data;
           
        }
        
    }


    protected function getImageOutput($symbol){
        
        
        if ( in_array( $symbol, $this->forex_symbols_array ) ) {
           
            $from = substr($symbol, 0, 3);
            $to = substr($symbol, -3);

            $this->img_output = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/' . $from . '.png" alt="Card image cap" width="30px">
            <img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'.$to.'.png" alt="Card image cap" width="30px">';

            $this->data_result['Forex'][$symbol]['Image'][] = $this->img_output;
        }

        if ( in_array( $symbol, $this->commodities_symbols_array ) ) {
        
            $this->img_output = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'.$symbol.'.png" alt="Card image cap" width="30px">';
            $this->data_result['Commodities'][$symbol]['Image'][] = $this->img_output;
        }

        if ( in_array( $symbol, $this->shares_symbols_array ) ) {

            $this->img_output = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'.$symbol.'.png" alt="Card image cap" width="30px">';
            $this->data_result['Shares'][$symbol]['Image'][] = $this->img_output;
        }

        if ( in_array( $symbol, $this->indices_symbols_array ) ) {
            $indexZone = substr( $symbol , 0 , 2 );
            
            $imgSymbol;
            if ( $indexZone ==='AU') {
                $imgSymbol = 'AUD';
            }
            if ( $indexZone ==='EU') {
                $imgSymbol = 'EUR';
            }
            if ( $indexZone ==='FR') {
                $imgSymbol = 'FRA';
            }
            if ( $indexZone ==='GE') {
                $imgSymbol = 'GER';
            }
            if ( $indexZone ==='IT') {
                $imgSymbol = 'ITA';
            }
            if ( $indexZone ==='JP') {
                $imgSymbol = 'JPY';
            }
            if ( $indexZone ==='NA') {
                $imgSymbol = 'NAS';
            }
            if ( $indexZone ==='SP') {
                $imgSymbol = 'SPA';
            }
            if ( $indexZone ==='SW') {
                $imgSymbol = 'CHF';
            }
            if ( $indexZone ==='UK') {
                $imgSymbol = 'GBP';
            }
            if ( $indexZone ==='US') {
                $imgSymbol = 'USD';
            }
            $this->img_output = '<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/'.$imgSymbol.'.png" alt="Card image cap" width="30px">';
            $this->data_result['Indices'][$symbol]['Image'][] = $this->img_output;
        }
    }
    
    protected function getPrices($symbol){
        
        $url = 'https://services.fxoro.com/api/marketdata/prices?Symbol='. $symbol;
          
        //initiate curl
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_URL, $url );
        
        //execute curl
        //$data = curl_exec($ch);
        //close curl
        curl_close($ch);       
        
        // decode the result from JSoN to Array
        $data_array= json_decode($data, true);
        
        // store the result


        $this->buyPrice = $data_array['Bid'];
        $this->sellPrice = $data_array['Ask'];

        if ( in_array( $symbol, $this->forex_symbols_array ) ) {
            
            $this->data_result['Forex'][$symbol]['BuyPrice'][] = $this->buyPrice;
            $this->data_result['Forex'][$symbol]['SellPrice'][] = $this->sellPrice;
        }
        if ( in_array( $symbol, $this->shares_symbols_array ) ) {
           
            $this->data_result['Shares'][$symbol]['BuyPrice'][] = $this->buyPrice;
            $this->data_result['Shares'][$symbol]['SellPrice'][] = $this->sellPrice;
        }
        if ( in_array( $symbol, $this->commodities_symbols_array ) ) {
           
            $this->data_result['Commodities'][$symbol]['BuyPrice'][] = $this->buyPrice;
            $this->data_result['Commodities'][$symbol]['SellPrice'][] = $this->sellPrice;
        }
        if ( in_array( $symbol, $this->indices_symbols_array ) ) {
           
            $this->data_result['Indices'][$symbol]['BuyPrice'][] = $this->buyPrice;
            $this->data_result['Indices'][$symbol]['SellPrice'][] = $this->sellPrice;
        }
    }

    
    
    protected function generateTickerName($symbol){
        if ( in_array($symbol, $this->forex_symbols_array ) ) {
            $fromCurrency = substr($symbol, 0, 3);
            $toCurrency = substr($symbol, -3);
            $this->tickerName = $fromCurrency . ' / ' . $toCurrency;

            $this->data_result['Forex'][$symbol]['Name'][] = $this->tickerName;
        }
        if ( in_array($symbol, $this->shares_symbols_array ) ) {

            $this->tickerName = $symbol;

            $this->data_result['Shares'][$symbol]['Name'][] = $this->tickerName;
        }
        if ( in_array($symbol, $this->commodities_symbols_array ) ) {
            $commodity_symbol =  substr( $symbol, 0, 3 );
            
            switch ($commodity_symbol) {
                case 'COP':
                    $this->tickerName = 'Copper';
                    break;
                
                case 'COF':
                    $this->tickerName = 'Coffee';
                    break;
                
                case 'COR':
                    $this->tickerName = 'Corn';
                    break;
                
                case 'GAS':
                    $this->tickerName = 'Gas';
                    break;
                
                case 'GOL':
                    $this->tickerName = 'Gold';
                    break;
                
                case 'NGA':
                    $this->tickerName = 'Natural Gas';
                    break;
                
                case 'Oil':
                    $this->tickerName = 'Oil';
                    break;
                
                case 'BRE':
                    $this->tickerName = 'Crude Oil';
                    break;
    
                case 'PLA':
    
                    $this->tickerName = 'Platinum';
                    break;
    
                case 'SUG':
                    $this->tickerName = 'Sugar';
                    break;
    
                case 'WHE':
                    $this->tickerName = 'Wheat';
                    break;
                    
                
                default:
                    break;
            }
            $this->data_result['Commodities'][$symbol]['Name'][] = $this->tickerName;

        }
        if ( in_array($symbol, $this->indices_symbols_array ) ) {
            
            preg_match( '/[A-Z]{2,4}[0-9]{2,4}/', $symbol, $match );
            $this->tickerName = $match;
            
            $this->data_result['Indices'][$symbol]['Name'] = $this->tickerName;
        }
    }
}
