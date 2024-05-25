<?php
include("ejercicio6.php");
$nombre1 = "Augusto08";
echo "el primer nombre es ".$nombre1."<br>";
$devolucion = comprobar_nombre_usuario($nombre1);
echo $devolucion;
$nombre2 = "/Augus";
echo "el segundo nombre es ".$nombre2."<br>";
$devolucion = comprobar_nombre_usuario($nombre2);
echo $devolucion;
$nombre3 = "Ia";
echo "el tercer nombre es ".$nombre3."<br>";
$devolucion = comprobar_nombre_usuario($nombre3);
echo $devolucion;
?>