<html>
<head>
<title>Actualizar Libros</title>
</head>
<body>
<?php	
header("Content-Type: text/html;charset=utf-8");
		include('includes/conexion.php');//Incluimos la conexión
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * FROM libros WHERE id='$_GET[id]'";
		
		
	if ($result = mysqli_query($enlace,$query))
		{
			while($fila = mysqli_fetch_array($result))
			{		
				 echo "TITULO:".$fila['titulo']."<br/>";
			echo "AUTOR:".$fila['autor']."<br/>";
			echo "TITULO:".$fila['anio']."<br/>";
			echo "AUTOR:".$fila['comentario']."<br/>";
			echo "FOTO:<img width='100px;' src='imagenes/".$fila['portada']."'/><br/>";
			echo "<hr/>";
				
			}
			
		}
		?>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html>

