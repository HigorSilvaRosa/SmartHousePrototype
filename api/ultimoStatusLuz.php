<?php
require_once("libs/rb.php");
R::setup('sqlite:smart_house.sqlite');
$ultimoRegistro = R::findLast("luz");