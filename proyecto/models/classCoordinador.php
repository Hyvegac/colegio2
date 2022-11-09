<?php

class Coordinador {
    public $IdCoordinador;
    public $nombre;
    public $correo;
    public $novedades;

    public function consultarCoordinador(){
        require_once ("../dao/BaseDatos.php");
        $conn = connect();
        $sql= "select * from coordinador";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    
    public function borrarCoordinador($IdCoordinador) {
        require_once ("../dao/BaseDatos.php");
        $conn = connect();
        $sql= "delete from coordinador where IdCoordinador=?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($IdCoordinador)));
        $conn = null;
        // print("<h2 style='text-aling: center; color:blue'>El coordinador $IdCoordinador ha sido borrado</h2> <br/>");
        header ("location:../views/viewCoordinador.php");
    }

    public function actualizarCoordinador($nombre,$correo,$novedades,$IdCoordinador) {
        require_once("../dao/BaseDatos.php");
        $conn = connect();
        $sql = "update coordinador set nombre = ? , correo = ? , novedades= ? where IdCoordinador = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre,$correo,$novedades,$IdCoordinador)));
        $conn= null;
        print "El coordinador $IdCoordinador,$nombre, con $correo,$novedades ha sido actualizado";
        print("<br><a href='../views/viewCoordinador.php'>Regresar</a>");
    }
    public function consultarCoord2($IdCoordinador){
        require_once ("../dao/BaseDatos.php");
        $conn = connect();
        $sql= "select * from coordinador where IdCoordinador = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($IdCoordinador)));
        return $consulta;
        $conn = null;
    }
    public function addCoordinador($nombre,$correo,$novedades) {
        require_once("../dao/BaseDatos.php");
        $conn = connect();
        $sql = "insert into coordinador (nombre,correo,novedades) values(?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre,$correo,$novedades));
        $conn= null;
        print "El coordinador $nombre,$correo,$novedades ha sido agregado";
        print("<br><a href='../views/viewCoordinador.php'>Regresar</a<");
    }
}

?>
