<html>
<head>
<title>Mostrar los libros</title>
</head>
<body>
<?php
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');//Incluimos la conexión  ORDER BY titulo DESC  ASC
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * FROM libros WHERE id='$_GET[id]' ";
	if ($result = mysqli_query($enlace,$query)){		
			while($fila = mysqli_fetch_array($result))
			{						
		    echo "TITULO:".$fila['titulo']."<br/>";
			echo "AUTOR:".$fila['autor']."<br/>";
			echo "TITULO:".$fila['anio']."<br/>";
			echo "AUTOR:".$fila['comentario']."<br/>";
			echo "portada:<img width='100px' src='imagenes/".$fila['portada']."'/><br/>";			
			echo "<hr/>";
			}
		}
		?>
<a href="mostrarlibronombre.php">Volver al Indice</a> <br/>
</body>
</html> 
