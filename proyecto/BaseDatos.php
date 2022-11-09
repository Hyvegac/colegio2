<?php
$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'clientes'
);
if (isset($conexion)){
    print ("EXITOSO");
}



?>