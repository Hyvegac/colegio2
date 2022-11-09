<?php

 include_once("../models/classNovedad.php");
 if(isset($_REQUEST["btnAgregar"])) {
    header("location:../views/addNovedad.php");
}elseif(isset($_REQUEST["btnActualizar"])) {
    header("location:../views/addNovedad2.php");
}elseif(isset($_REQUEST["btnAgregar"])) {
    $nuevoNovedad = new Novedad();
    $nuevoNovedad-> nombre = "La novedad ha sido Guardada";
    print($nuevoNovedad-> nombre ); 
}elseif(isset($_REQUEST["btnNovedad1"])){
    $nuevoNovedad = new Novedad ();
   
    print($nuevoNovedad -> borrarNovedad("2", "Peticion", "Ha sido"));
    
    
}elseif(isset($_REQUEST["btnNovedad2"])) {
    
    $nuevoNovedad = new Novedad();
   
    print($nuevoNovedad-> actualizarNovedad("PQRS: ", "Esta en proceso de")); 
}elseif(isset($_REQUEST["actNovedad"])){
    $nombre = $_REQUEST["nombre"];
    $programa = $_REQUEST["programa"];
    $correo = $_REQUEST["correo"];

    $nuevoNovedad = new Novedad();
    print($nuevoNovedad -> crearNovedad1($nombre,$programa,$correo));

}elseif(isset($_REQUEST["actNovedad1"])){
    $nombre = $_REQUEST["nombre"];
    $programa = $_REQUEST["programa"];
    $correo = $_REQUEST["correo"];

    $nuevoNovedad = new Novedad();
    print($nuevoNovedad -> crearNovedad2($nombre,$programa,$correo));

}
?>