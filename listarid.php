<html>
<head>
<title>Mostrar los libros</title>
</head>
<body>
<?php

include('includes/conexion.php');
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * from libros order by id DESC LIMIT 1";
	if ($result = mysqli_query($enlace,$query))
		{
			while($fila = mysqli_fetch_array($result))
			{			
		   
			echo "".$fila['id']."<br/>";
			
						
		
						
			}
				
		}		
?>
<br/><a href="index.php">Volver al Indice2</a> <br/>
</body>
</html> 
