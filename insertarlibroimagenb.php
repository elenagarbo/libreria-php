<?php
header("Content-Type: text/html;charset=utf-8"); 
if(isset($_FILES) && !$_FILES['imagen1']['error']){
	  //no hay error al subir el fichero al servidor
	  $ruta="imagenes/";
	  move_uploaded_file($_FILES['imagen1']['tmp_name'],$ruta.$_FILES['imagen1']['name']);
} 
$imagen1=!$_FILES['imagen1']['error']?$_FILES['imagen1']['name']:'generico.jpg';	


include('includes/conexion.php');//Incluimos la conexión
  $acentos = $enlace->query("SET NAMES 'utf8'");//acentos
  /*Creamos la consulta de insertar en los campos de la base de datos los valores correspondientes*/
  $query="INSERT INTO libros(titulo,autor,anio,comentario,portada)	VALUES 
('{$_POST['titulo']}','{$_POST['autor']}','{$_POST['anio']}','{$_POST['comentario']}','$imagen1'
)";
if (mysqli_query($enlace,$query)){
                   echo 'Se ha insertado el libro en la base de datos<br/><a href="index.php">Volver al Indice</a> <br/>';
                }
                else{
                    echo "<p>Hubo algún problema al registrar el Libro. Inténtelo más tarde</p>"; }
	?>
	
	