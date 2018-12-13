<html>
<head>
<title>Insertar Libros con imágenes</title>
</head>
<body>
<h1>Alta Nuevos libros</h1>
<form action="insertarlibroimagenb.php" method="post" enctype="multipart/form-data">
Ingrese Titulo del Libro:<br/>
<input type="text" name="titulo"><br/>
Ingrese Autor del Libro:<br/>
<input type="text" name="autor"><br/>
Insertar año de edición<br/>
<input type="text" name="anio"><br/>
Insertar Comentario<br/>
<textarea name="comentario"></textarea><br/>
Insertar Comentario<br/>
Imagen1:
<input name="imagen1" type="file" id="adjuntar" size="12"><br/> 
<input type="submit" value="Registrar">
</form>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html>

