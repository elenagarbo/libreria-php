<?php 
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');  

if( $_FILES['imagen1']['error']  ){	
}
else{
  if(isset($_FILES) && !$_FILES['imagen1']['error']){
	  //no hay error al subir el fichero al servidor
	  $ruta="imagenes/";
	  move_uploaded_file($_FILES['imagen1']['tmp_name'],$ruta.$_FILES['imagen1']['name']);
} 
  $imagen1=!$_FILES['imagen1']['error']?$_FILES['imagen1']['name']:'generico.jpg';  
$query = "SELECT id FROM libros
                       where id='$_POST[id]'";
	if (mysqli_query($enlace,$query)){
                   
				   $query = "UPDATE  libros SET portada='$imagen1' where id='$_POST[id]'";
				   echo "adios";mysqli_query($enlace,$query);
		}
	}
		
   $titulo=addslashes($_POST["titulo"]);
   $autor=addslashes($_POST["autor"]);   
   $anio=addslashes($_POST["anio"]);
   $comentario=addslashes($_POST["comentario"]);
 $acentos = $enlace->query("SET NAMES 'utf8'");
	$query=" UPDATE  libros SET titulo='$titulo',autor='$autor',anio='$anio',comentario='$comentario' WHERE id='$_POST[id]'";	
if (mysqli_query($enlace,$query)){
                    echo '<a href="index.php">Volver al Indice</a> <br/>';                
                }
                else
                { echo "<p>Hubo algún problema al registrar el usuario. Inténtelo más tarde</p>";}
?>

