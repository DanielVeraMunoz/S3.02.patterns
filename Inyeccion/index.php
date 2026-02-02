<?php

require_once "auriculares.php";
require_once "cartera.php";
require_once "telefono.php";
require_once "daniel.php";

$telefono = new Telefono("nokia", 30);
$cartera = new Cartera(0, 10);
$auriculares = new Auriculares(23);

$daniel = new Daniel($telefono, $cartera, $auriculares);

$daniel->salirDeCasa();
