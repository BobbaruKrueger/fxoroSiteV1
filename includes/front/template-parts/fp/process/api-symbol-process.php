<?php
require_once('Api.php');


if ( isset($_GET['symbol']) && !empty($_GET['symbol']) ) {
    $symbol = $_GET['symbol'];

    $api = new API();

    $api->getSymbolData($symbol);

    echo json_encode($api->data_result);
}
?>