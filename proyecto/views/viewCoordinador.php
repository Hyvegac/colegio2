<?php
require_once("../models/classCoordinador.php");
$coordinador = new Coordinador();
$datos = $coordinador->consultarCoordinador();
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
    <form action='../controllers/controladorCoordinador.php' method='POST'>
    <td>
        <input type='submit' id='btnAgregar' name='btnAgregar' value='Crear'/>
    </td>
    </form>
    <table id='example' class='table table-striped' style='width:100%'>
    <body>
        <thead>
            <tr>
                <th>identificacion</th>
                <th>nombre</th>
                <th>correo</th>
                <th>novedades</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        ");
        while ($data=$datos->fetch(PDO::FETCH_ASSOC)){
            print("
                <tbody>
                    <tr>
                        <td>".$data["IdCoordinador"]."</td>
                        <td>".$data["nombre"]."</td>
                        <td>".$data["correo"]."</td>
                        <td>".$data["novedades"]."</td>
                        <td>
                            <input type='button' id='btnActualizar' name='btnActualizar' value='Actualizar' onclick='Validar(".
                            $data['IdCoordinador'].")'/>
                        </td>
                        <td>
                            <input type='button' id='botonBorra' name='botonBorra' value='Borrar' onclick='borrar(".
                            $data['IdCoordinador'].")'/>
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
    function Validar(IdCoordinador) {
    var dato = confirm("Seguro que desea actualizar el Coordinador ?"+ IdCoordinador);
    if(!dato){
        window.location.href="../views/viewCoordinador.php";
    }else{
        window.location.href=`../controllers/controladorCoordinador.php?IdCoordinador=${IdCoordinador}&value=Actualizar`; 
    }
}
    function borrar($IdCoordinador) {
    var dato = confirm("Seguro que desea borrar al Coordinador "+ $IdCoordinador);
    if(!dato){
        window.location.href="../views/viewCoordinador.php";
    }else{
        window.location.href="../controllers/controladorCoordinador.php?IdCoordinador="+ $IdCoordinador + "&value=Borra"; 
    }
}
</script>

