<html>
<head>
<title>Mostrar los libros</title>
</head>
<body>
<?php

include('includes/conexion.php');
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * from libros";
	if ($result = mysqli_query($enlace,$query))
		{echo'
			<table border="1" width="800px">
			<tr>
		<th>Titulo</th>
			<th>AUTOR</th>
			<th>AÑO</th>
			<th>COMENTARIO</th>		
			</tr>';
			while($fila = mysqli_fetch_array($result))
			{			
		    echo "<tr>"		;
			echo "<td>".$fila['titulo']."</td>";
			echo "<td>".$fila['autor']."</td>";
			echo "<td>".$fila['anio']."</td>";
			echo "<td>".$fila['comentario']."</td>";			
			echo "</tr>";
						
			}
			echo'</table >';		
		}		
?>
<br/><a href="index.php">Volver al Indice2</a> <br/>
</body>
</html> 
