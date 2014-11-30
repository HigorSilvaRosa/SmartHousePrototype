<?php
require_once("libs/rb.php");
R::setup('sqlite:smart_house.sqlite');
$ultimoRegistro = R::findLast("luz");
if (!$ultimoRegistro || $ultimoRegistro->status != true){
    $luz = R::dispense('luz');
    $luz->status = true;
    $luz->data = R::isoDateTime();
    $id = R::store( $luz );
}