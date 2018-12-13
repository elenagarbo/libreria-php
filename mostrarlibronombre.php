<html>
<head>
<title>Mostrar los libros actualizar y eliminar</title>
</head>
<body>
<?php
header("Content-Type: text/html;charset=utf-8");

include('includes/conexion.php');
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * from libros";
	if ($result = mysqli_query($enlace,$query))
		{echo'
			<table border="1" width="800px">
			<tr>
			<th>TITULO</th>
			
			</tr>';
			while($fila = mysqli_fetch_array($result))
			{			
		    echo "<tr>
			<td>
			<a  href='mostrarlibrocompleto.php?id=".$fila['id']."'>
			".$fila['titulo']."
			</a>";			
			echo "</tr>";
			}
			echo'</table >';		
		}			
?>
<br/>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html> 
