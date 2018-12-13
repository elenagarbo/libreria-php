<html>
<head>
<title>Mostrar los libros</title>
<style>
.libro{width:400px;height:280;background:url(imagenes/generico.jpg);backgorund-size:contain;border:1px solid;margin-right:20px;float:left; }
.titulo{text-align:center;margin:20px;font-size:30px;}
.autor{text-align:center;margin:20px;font-size:20px;}
.anio{text-align:center;margin:20px;font-size:20px;}
.comentario{text-align:center;margin:20px;}
</style>
</head>
<body>
<?php
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');//Incluimos la conexión
		$acentos = $enlace->query("SET NAMES 'utf8'");
		
		
		
		
		$query = "SELECT * FROM libros ORDER BY anio DESC  LIMIT 2   ";
		
		
		
		
		
		
		
		
		
		
		

	if ($result = mysqli_query($enlace,$query))
		{
			while($fila = mysqli_fetch_array($result))
			{				
			echo '<div class="libro">';
		    echo '<div class="titulo">'.$fila['titulo'].'</div>';
			echo '<div class="autor">'.$fila['autor'].'</div>';
			echo '<div class="anio">'.$fila['anio'].'</div>';
			echo '<div class="comentario">'.$fila['comentario'].' </div>';
			echo '</div>';		

			}
		}
	?>
	
<!--primero creamos uno en html  luego lo pasamos al while-->
<!--<div class="libro">
<div class="titulo">Cien años de soledad</div>
<div class="autor">Gabriel Garcìa Màrquez</div>
<div class="anio">1980</div>
<div class="comentario">Un libro muy recomendable </div>
</div>-->
<!--primero creamos uno en html  luego lo pasamos al while-->
<hr/>
<a href="index.php">Volver al Indice</a> <br/>










</body>
</html> 
