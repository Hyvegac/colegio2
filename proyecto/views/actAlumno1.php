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
	require_once("../models/classAlumno.php");
	require_once("../BaseDatos.php");
	$Idaprendiz = $_REQUEST["Idaprendiz"];
	$aprendiz = new Aprendiz();
	$datos = $aprendiz -> consultarAlumno2($Idaprendiz);
	while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
		print('
		<form action= "../controllers/controladorAlumno.php" method="post">
			<h3 style= "color:blue"><label> Id: </label>
				<input type="hidden" name="actIdAlumno" id="actIdAlumno" value="'.$data["Idaprendiz"].'"/></h3>
			<br>
			<h3 style= "color:blue"><label> Nombre completo: </label>
				<input type="text" name="actNameAlumno" id="actNameAlumno" value="'.$data["nombre"].'"/></h3>
			<br>
			<h3 style= "color:blue "><label> Correo: </label>
				<input type="email" name="actCorreoAlumno" id="actCorreoAlumno" value="'.$data["correo"].'"/>
			</h3>
			<br>
			<h3 style= "color:blue"><label> Telefono </label>
				<input type="text" name="actTelAlumno" id="actTelAlumno" value="'.$data["telefono"].'"/>
			</h3>
			<br>
			<h3 style= "color: blue "><label> Programa: </label>
				<input type="text" name="actProgramaAlumno" id="actProgramaAlumno" value="'.$data["programa"].'"/>
			</h3>
			<input type="submit" name="btnActAlumno" id="btnActAlumno" value="Enviar"/>
			<input type="reset" name="" id="" value ="Limpiar"/>
			<a href="../views/viewAlumno.php">Regresar</a>
		</form>
	</div>
	</body>
	</html>
	');
	}

?>