<?php


$cadena = "hola";
$fecha = Time();
//echo hash("sha512",$cadena);
echo md5($cadena.$fecha);




?>