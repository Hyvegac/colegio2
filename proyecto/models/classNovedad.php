<?php

class Novedad {
    public $tipo;
    public $descripcion;

    public function borrarNovedad($idNovedad, $tipo, $descripcion) {
        print("<h2 style='text-aling: center; color:blue'>La novedad # $idNovedad $tipo $descripcion ha sido borrada</h2> <br/>");
        print("<a href='../views/viewNovedad.php'>Regresar</a>");
    }

    public function actualizarNovedad($idNovedad, $tipo) {
        print("<h2 style='text-aling: center; color:blue'>La novedad #1 $idNovedad $tipo ha sido guardado</h2> <br/>");
        print("<a href='../views/viewNovedad.php'>Regresar</a>");
    }
    public function crearNovedad1($nombre,$programa,$correo) {
        print("<h2 style='text-aling: center; color:blue'>El nombre de la novedad o PQR: $nombre con correo del remitente: $correo del programa: $programa  ha sido modificado</h2> <br/>");
        print("<a href='../views/viewNovedad.php'>Regresar</a>");
    }     
    public function crearNovedad2($nombre,$programa,$correo) {
        print("<h2 style='text-aling: center; color:blue'>El nombre de la novedad o PQR: $nombre con correo del remitente: $correo del programa:  $programa  ha sido actualizado</h2> <br/>");
        print("<a href='../views/viewNovedad.php'>Regresar</a>");
    }  
}

?>