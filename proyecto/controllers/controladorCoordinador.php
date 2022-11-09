<?php
include_once("../models/classCoordinador.php");

if(!isset($_REQUEST['IdCoordinador']))
{
    $_REQUEST['IdCoordinador'] =0;
}
if(!isset($_REQUEST["coordinador"])){

    if(($_REQUEST['IdCoordinador'] != null)&&($_REQUEST["value"] == "Borra")){
        $IdCoordinador = $_REQUEST['IdCoordinador'];
        $coordinador = new coordinador();
        $coordinador -> borrarcoordinador($IdCoordinador);
    }
    elseif(isset($_REQUEST["btnAgregar"])) {
        header("location:../views/addCoord1.php");
    }elseif(isset($_POST["btnNewCoordinador"]) && ($_REQUEST["btnNewCoordinador"] != null)) {
        $nombre = $_REQUEST['newNameCoord'];
        $correo = $_REQUEST['newCorreoCoord'];
        $programa = $_REQUEST['newProgramaCoord'];
        $coordinador = new Coordinador();
        $coordinador -> addCoordinador($nombre,$correo,$telefono,$programa );
    }elseif(($_REQUEST["IdCoordinador"] != null) && ($_REQUEST["value"] == "Actualizar")) {
        header("location:../views/actCoord.php?IdCoordinador=".$_REQUEST["IdCoordinador"]);
        $coordinador = new Coordinador();
    }elseif(isset($_POST["btnActCoord"])&&($_REQUEST["btnActCoord"]!=null)){
        $IdCoordinador = $_REQUEST['actIdCoord'];
        $nombre = $_REQUEST['actNameCoord'];
        $correo = $_REQUEST['actCorreoCoord'];
        $programa = $_REQUEST['actProgramaCoord'];
        $coordinador = new Coordinador();
        $coordinador -> actualizarCoordinador($nombre,$correo,$programa,$IdCoordinador);
    }
}else{
    header("location:../views/viewCoordinador.php");
}
?>