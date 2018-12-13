<html>
<head>
<title>Mostrar los libros</title>
</head>
<body>
<?php
include('conexion.php');
//Incluimos la conexión  ORDER BY titulo DESC  ASC
$acentos = $enlace->query("SET NAMES 'utf8'");
/*SELECT campo1,campo2..... FROM tabla*/
$query = "SELECT * FROM libros  ";
	if ($result = mysqli_query($enlace,$query)){		
			while($fila = mysqli_fetch_array($result))
			{						
		    echo "TITULO:".$fila['titulo']."<br/>";
			echo "AUTOR:".$fila['autor']."<br/>";
			echo "AÑO:".$fila['anio']."<br/>";
			echo "COMENTARIO:".$fila['comentario']."<br/>";
			/*echo "portada:<img width='100px' src='imagenes/".$fila['portada']."'/><br/>";		*/	
			echo "<hr/>";
			}
		}
		else
		{echo "no se han encontrado libros con esas características";}
		?>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html> 
