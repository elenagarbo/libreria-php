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
				?>
			<h1>Alta Nuevos libros</h1>
			<form action="actualizarlibrobfoto.php" method="post" enctype="multipart/form-data">
			 <?php echo "<input   type='text'  value='".$fila['id']."' name='id'/>";?>
			Ingrese Titulo del Libro:<br/>
			<input type="text" name="titulo" <?php echo 'value="'.$fila['titulo'].'""';?>  /><br/>
			Ingrese Autor del Libro:<br/>
			<input type="text" name="autor" <?php echo 'value="'.$fila['autor'].'""';?>  /><br/>
			Insertar año de edición<br/>
			<input type="text" name="anio" <?php echo 'value="'.$fila['anio'].'""';?>  /><br/>
			Insertar Comentario<br/>
			<textarea name="comentario"><?php echo $fila['comentario']?> </textarea><br/>
			
			Portada:<br/>
			<img width='50px' src='imagenes/<?php echo $fila['portada']?>'/>
			<br/>
<input name="imagen1" type="file" id="adjuntar" size="12"><br/> 
			<input type="submit" value="Actualizar">
			</form>
		<?php
			}
		}			
		?>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html>

