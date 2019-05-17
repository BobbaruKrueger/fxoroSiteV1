<?php
require_once('Api.php');
$api = new API();

$api->getDataAsync();

echo json_encode($api->data_result);

?>