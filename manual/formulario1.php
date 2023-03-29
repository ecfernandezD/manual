<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<title>Formulario</title>
</head>

<body>
	<?php
		include'css/barra.html'
	?>
	<section>
		<th>complete todos los datos</th>
		<br>
		<form action="formulario1.php" method="get" >
			<table bgcolor="#72cd" border="1" bordercolor="orange" cellspacing="10">
				<tr bgcolor="#07d">
					<th colspan="2">Datos</th>
				</tr>
				<tr>
					<th>NOMBRE</th>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<th>APELLIDO</th>
					<td><input type="text" name="apellido"></td>
				</tr>
				<tr>
					<th>LOGIN</th>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<th>PASSWORD</th>
					<td><input type="password" name="clave"></td>
				</tr>
				<tr>
					<th>Genero</th>
					<td>M &nbsp<input type="radio" name="sexo" value="M">
						&nbsp&nbsp&nbsp F &nbsp<input type="radio" name="sexo" value="F"> 
						&nbsp&nbsp&nbsp OTRO &nbsp<input type="radio" name="sexo" value="otro">
					</td>
				</tr>
				<!--creacion de dos botones-->
				<tr>
					<td><input type="submit" value="ENVIAR DATOS"></td>
					<td><input type="reset" value="RESTABLECER"></td>
				</tr>
			</table>

				<br>
			<table border="4" bordercolor="black" bgcolor="orange">
				<tr>
					<th colspan="2">Datos personales registrados en el formu7lario</th>
				</tr>
				<tr>
					<th>  NOMBRE </th>
					<td>
						<?php 
						//correcion de error Notice: Undefined index: con isset()
							$nombre	= isset($_GET['nombre']);
							echo "".$nombre;
						?>							
					</td>
				</tr>
				<tr>
					<th>  APELLIDO </th>
					<td>
						<?php 
							$apellido = isset($_GET['apellido']);
							echo "".$apellido;
						?>						
						</td>
				</tr>
				<tr>
					<th>  LOGIN </th>
					<td>
						<?php 
							$login 	= isset($_GET['login']);
							echo "".$login;
						?>							
					</td>
				</tr>
				<tr>
					<th>  PASWORD </th>
					<td>
						<?php 
							$clave 	= isset($_GET['clave']);
							echo "".$clave;
						?>						
					</td>
				</tr>
			</table>
		</form>
		<?php  
			/* obtiene un dato del input
			$nombre	= $_GET['nombre'];
			$apellido = $_GET['apellido'];
			$login 	= $_GET['login'];
			$clave 	= $_GET['clave'];
			
			imprime el dato
			echo "nombre:"		.$nombre;
			echo "apellido" 	.$apellido;
			echo "login" 		.$login;
			echo "clave" 		.$clave;*/
		?>
	</section>

</body>
</html>