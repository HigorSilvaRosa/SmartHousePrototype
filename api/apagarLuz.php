<?php
require_once("base.php");
$ultimoRegistro = R::findLast("luz");
if (!$ultimoRegistro || $ultimoRegistro->status != false){
    $luz = R::dispense('luz');
    $luz->status = false;
    $luz->data = R::isoDateTime();
    $luz->ip = $_SERVER["REMOTE_ADDR"];
    $id = R::store( $luz );
}