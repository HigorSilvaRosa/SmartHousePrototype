<?php
require_once("libs/rb.php");
R::setup('sqlite:smart_house.sqlite');
$luz = R::findLast("luz");
$response = null;
$response["ok"] = false;
if($luz){
    $response["status"] = (boolean) $luz->status;
    $response["data"] = $luz->data;
    $response["ok"] = true;
}
echo json_encode($response);