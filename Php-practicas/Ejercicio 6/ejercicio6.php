<?php
function comprobar_nombre_usuario($nombre_usuario){
    if(strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20 ){
        echo $nombre_usuario ." no es valido<br>";
        return false;
    }
    $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHOIJKLMNÑOPQRSTUVWXYZ0123456789-_";
    for($i=0;$i<strlen($nombre_usuario);$i++){
        if(strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario." no es valido<br>";
            return false;
        }
    }
    echo $nombre_usuario." es valido<br>";
    return false;
}

echo "ingrese su nombre : ";
fscanf(STDIN,"%s",$nombre);
$devolucion = comprobar_nombre_usuario($nombre);
echo $devolucion;

?>

