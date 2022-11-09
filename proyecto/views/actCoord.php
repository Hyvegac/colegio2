<?php
print('
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style = "background-color: #cf8af2; border: solid 1px black; text-align: center;width: 50%;
        height: 80%">
        <h1 style="text-align: center; color:blue">Formulario de Modificar</h1>
	');
	require_once("../models/classCoordinador.php");
	require_once("../BaseDatos.php");
	$IdCoordinador = $_REQUEST["IdCoordinador"];
	$coordinador = new coordinador();
	$datos = $coordinador -> consultarcoord2($IdCoordinador);
	while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
		print('
		<form action= "../controllers/controladorCoordinador.php" method="post">
			<h3 style= "color:blue"><label> Id: </label>
				<input type="hidden" name="actIdCoord" id="actIdCoord" value="'.$data["IdCoordinador"].'"/></h3>
			<br>
			<h3 style= "color:blue"><label> Nombre completo: </label>
				<input type="text" name="actNameCoord" id="actNameCoord" value="'.$data["nombre"].'"/></h3>
			<br>
			<h3 style= "color:blue "><label> Correo: </label>
				<input type="email" name="actCorreoCoord" id="actCorreoCoord" value="'.$data["correo"].'"/>
			</h3>
			<br>
			<h3 style= "color: blue "><label> Programa: </label>
				<input type="text" name="actProgramaCoord" id="actProgramaCoord" value="'.$data["novedades"].'"/>
			</h3>
			<input type="submit" name="btnActCoord" id="btnActCoord" value="Enviar"/>
			<input type="reset" name="" id="" value ="Limpiar"/>
			<a href="../views/viewCoordinador.php">Regresar</a>
		</form>
	</div>
	</body>
	</html>
	');
	}

?>