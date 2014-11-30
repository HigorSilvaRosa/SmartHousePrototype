<?php
require_once("base.php");
$luz = R::findLast("luz");
$response = null;
$response["ok"] = false;
if($luz){
    $response["status"] = (boolean) $luz->status;
    $response["data"] = $luz->data;
    $response["ip"] = $luz->ip;
    $response["ok"] = true;
}
echo json_encode($response);