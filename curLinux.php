<?php 

	$conexion=mysqli_connect('localhost','root','','vladb');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Curso de Linux</title>
</head>
<body>
<h1>Detalle del Curso de Linux</h1>
<br>

<img class="card-img-top" src="img/Logo-Linux--625x330.jpg">
<br>

	<table border="3" >
		<tr>
			<td>Curso</td>
			<td>Descripcion</td>
			<td>Costo($)</td>
			<td>URL</td>
			<td>Fecha de Inicio</td>
            <td>Fecha de Fin de Curso</td>
			<td>Hora Inicio de Clase</td>
			<td>Duracion de sesiones de clase (hrs)</td>
			<td>Cantidad Mx de Alumnos</td>
			<td>Nombre del docente</td>		
		</tr>

		<?php 
		$sql="SELECT * from catalogo WHERE IDCatalogoClase = 5";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['NombreCurso'] ?></td>
			<td><?php echo $mostrar['Descripcion'] ?></td>
			<td><?php echo $mostrar['Costo'] ?></td>
			<td><?php echo $mostrar['UrlLink'] ?></td>
			<td><?php echo $mostrar['FechaInicio'] ?></td>
            <td><?php echo $mostrar['FechaFin'] ?></td>
			<td><?php echo $mostrar['HoraInClase'] ?></td>
			<td><?php echo $mostrar['SesClase'] ?></td>
            <td><?php echo $mostrar['CanAlumMax'] ?></td>
			<td><?php echo $mostrar['NombreProfe'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>