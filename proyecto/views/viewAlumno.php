<?php
require_once("../models/classAlumno.php");
$aprendiz = new Aprendiz();
$datos = $aprendiz->consultarAlumno();
    print ("
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css'>
        <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
        <script src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js'></script>
        <script>
            $(document).ready(function () {
            $('#example').DataTable();
            });
        </script>
    </head>
    <br>
    <form action='../controllers/controladorAlumno.php' method='POST'>
    <td>
        <input type='submit' id='btnAgregar' name='btnAgregar' value='Crear'/>
    </td>
    </form>
    <table id='example' class='table table-striped' style='width:100%'>
    <body>
        <thead>
            <tr>
                <th>Identificacion</th>
                <th>Nombre y Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Programa</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        ");
        while ($data=$datos->fetch(PDO::FETCH_ASSOC)){
            print("
                <tbody>
                    <tr>
                        <td>".$data["Idaprendiz"]."</td>
                        <td>".$data["nombre"]."</td>
                        <td>".$data["correo"]."</td>
                        <td>".$data["telefono"]."</td>
                        <td>".$data["programa"]."</td>
                        <td>
                            <input type='button' id='btnActualizar' name='btnActualizar' value='Actualizar' onclick='Validar(".
                            $data['Idaprendiz'].")'/>
                        </td>
                        <td>
                            <input type='button' id='botonBorra' name='botonBorra' value='Borrar' onclick='borrar(".
                            $data['Idaprendiz'].")'/>
                        </td>
                       
                    </tr>
                </tbody>
                ");
            }
            print("
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Program</th>
                <th>Phone</th>
                <th>Update</th>
            </tr>
            </tfoot>
    </table>
    <li class='nav-item'>
        <a class='nav-link' href='../ejercicio2.php'>Regresar</a>
    </li>
    </body>
    </html>
");
?>
<script type="text/javaScript">
    function Validar(Idaprendiz) {
    var dato = confirm("Seguro que desea actualizar el alumno ?"+ Idaprendiz);
    if(!dato){
        window.location.href="../views/viewAlumno.php";
    }else{
        window.location.href=`../controllers/controladorAlumno.php?Idaprendiz=${Idaprendiz}&value=Actualizar`; 
    }
}
    function borrar($Idaprendiz) {
    var dato = confirm("Seguro que desea borrar al alumno "+ $Idaprendiz);
    if(!dato){
        window.location.href="../views/viewAlumno.php";
    }else{
        window.location.href="../controllers/controladorAlumno.php?Idaprendiz="+ $Idaprendiz + "&value=Borra"; 
    }
}
</script>
