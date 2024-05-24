<?php
include("ejercicio6.php");
echo "ingrese su nombre : ";
fscanf(STDIN,"%s",$nombre);
$devolucion = ejercicio6($nombre);
echo $devolucion;
?>
