 <?php 
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');//Incluimos la conexión
  $acentos = $enlace->query("SET NAMES 'utf8'");
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
 $anio = $_POST['anio'];
 $comentario = $_POST['comentario'];
  //acentos
  /*Creamos la consulta de insertar en los campos de la base de datos los valores correspondientes*/  
  $query="INSERT INTO libros(titulo,autor,anio,comentario)	VALUES 
(  '$titulo','$autor','$anio','$comentario')";
if (mysqli_query($enlace,$query)){
                   echo 'se ha insertado el libro en la base de datos<br/><a href="index.php">Volver al Indice</a> <br/>';
                }
                else{
                    echo "<p>Hubo algún problema al registrar el Libro. Inténtelo más tarde</p>". mysqli_error($enlace); }

	?>
	
	
	
	
	
	
	
	
	