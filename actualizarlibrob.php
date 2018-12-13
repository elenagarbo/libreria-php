<?php 
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');  
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

