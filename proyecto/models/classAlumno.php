<?php

class Aprendiz {
    public $nombre;
    public $correo;
    public $telefono;
    public $programa;

    public function consultarAlumno(){
        require_once ("../dao/BaseDatos.php");
        $conn = connect();
        $sql= "select * from alumno";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    
    public function borrarAprendiz($Idaprendiz) {
        require_once ("../dao/BaseDatos.php");
        $conn = connect();
        $sql= "delete from alumno where Idaprendiz=?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($Idaprendiz)));
        $conn = null;
        // print("<h2 style='text-aling: center; color:blue'>El alumno $Idaprendiz ha sido borrado</h2> <br/>");
        header ("location:../views/viewAlumno.php");
    }

    public function actualizarAprendiz($nombre,$correo,$telefono,$programa,$Idaprendiz) {
        require_once("../dao/BaseDatos.php");
        $conn = connect();
        $sql = "update alumno set nombre = ? , correo = ? ,telefono = ? , programa= ? where Idaprendiz = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre,$correo,$telefono,$programa,$Idaprendiz)));
        $conn= null;
        print "El alumno $Idaprendiz,$nombre, con $correo,$telefono,$programa ha sido actualizado";
        print("<br><a href='../views/viewAlumno.php'>Regresar</a>");
    }
    public function consultarAlumno2($Idaprendiz){
        require_once ("../dao/BaseDatos.php");
        $conn = connect();
        $sql= "select * from alumno where Idaprendiz = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($Idaprendiz)));
        return $consulta;
        $conn = null;
    }
    public function addAlumno($nombre,$correo,$telefono,$programa) {
        require_once("../dao/BaseDatos.php");
        $conn = connect();
        $sql = "insert into alumno (nombre,correo,telefono,programa) values(?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre,$correo,$telefono,$programa));
        $conn= null;
        print "El alumno $nombre,$correo,$telefono,$programa ha sido agregado";
        print("<br><a href='../views/viewAlumno.php'>Regresar</a<");
    }
}


?>
