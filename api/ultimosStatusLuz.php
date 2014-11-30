<?php
require_once("base.php");
$ultimos_status = R::findAll("luz");
$response = array();
$response["ok"] = true;
$lista = array();
foreach ($ultimos_status as $luz){
    $status =  array();
    $status["status"] = (boolean) $luz->status;
    $status["data"] = $luz->data;
    $status["ip"] = $luz->ip;
    array_push($lista, $status);
}
$response["lista"] = array_reverse($lista);
echo json_encode($response);