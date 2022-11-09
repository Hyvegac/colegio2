<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css'>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
            $('#example').DataTable();
            });
        </script>
    </head>
<?php
	print ("
    <form action='../controllers/controladorNovedad.php' method='POST'>
    <td>
        <input type='submit' id='btnAgregar' name='btnAgregar' value='Crear'/>
        <input type='submit' id='btnActualizar' name='btnActualizar' value='Modificar'/>
    </td>
    </form>
    <body>
    <table id='example' class='table table-striped' style='width:100%'>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descripcion</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Peticion,Quejas,Reclamos y Sugerencias</td>
                <td>Describa su peticion, queja,reclamo y sugerencia</td>
                <td><form action='../controllers/controladorNovedad.php' method='POST'>
                <input type='submit' id='btnNovedad1' name='btnNovedad2' value='Guardar'></input></td>
                <td><form action='../controllers/controladorNovedad.php' method='POST'>
                <input type='submit' id='btnNovedad2' name='btnNovedad2' value='Eliminar'></input></td>
            </tr>
            <tfoot>
        <tr>
            <th>Type</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </tfoot>
    </table>
    <li class='nav-item'>
        <a class='nav-link' href='../ejercicio2.php'>Regresar</a>
    </li>
");
?>
</html>

