<html>
<head>
<title>Mostrar los libros</title>
</head>
<body>
<?php	
header("Content-Type: text/html;charset=utf-8");
	if(isset($_POST['titulo'])){		
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$anio=$_POST['anio'];
		
		include('includes/conexion.php');//Incluimos la conexión
		$acentos = $enlace->query("SET NAMES 'utf8'");
				
		$query = "SELECT * FROM libros WHERE titulo LIKE '%$titulo%' AND  autor LIKE '%$autor%'  AND  anio LIKE '%$anio%' ORDER BY autor ASC  LIMIT 2";
			
	if ($result = mysqli_query($enlace,$query))
		{
			while($fila = mysqli_fetch_array($result))
			{				 
			echo "TITULO:".$fila['titulo']."<br/>";
			echo "AUTOR:".$fila['autor']."<br/>";
			echo "TITULO:".$fila['anio']."<br/>";
			echo "AUTOR:".$fila['comentario']."<br/>";
			echo "<hr/>";
			}
		}		
	}		?>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html> 
