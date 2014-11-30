<?php
require_once("base.php");
$ultimoRegistro = R::findLast("luz");
if (!$ultimoRegistro || $ultimoRegistro->status != true){
    $luz = R::dispense('luz');
    $luz->status = true;
    $luz->data = R::isoDateTime();
    $luz->ip = $_SERVER["REMOTE_ADDR"];
    $id = R::store( $luz );
}