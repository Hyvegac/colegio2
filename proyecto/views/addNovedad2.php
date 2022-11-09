<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style = 'background-color: rgb(225, 175, 82); border: solid 1px black; text-align: center;width: 50%;
		height: 80%'>
		<h1 style='text-aling: center; color:blue'>Formulario Crear o Agregar</h1>
		<form action= '../controllers/controladorNovedad.php' method='post'>
			<h3 style= 'color:blue'><label> Nombre del PQR: </label>
			<input type='text' name='nombre' style='text-aling: center'/></h3>
			<br>
			<h3 style= 'color:blue '><label> Correo del remitente: </label>
			<input type='email' name='correo'/></h3>
			<br>
            <h3 style= 'color: blue '><label> Programa: </label>
			<input type='text' name='programa'/></h3>
			<input type='submit' name='actNovedad1' id='actNovedad1'/>
			<br><a href="../views/viewNovedad.php">Regresar</a>
		</form>
	</div>
</body>
</html>