<?php 

header("Content-Type: text/html;charset=utf-8");

include('includes/conexion.php');
  
  
 $acentos = $enlace->query("SET NAMES 'utf8'");
 

			$query = "DELETE FROM alumnos";
	mysqli_query($enlace,$query);
mysqli_close($enlace);
				   			   
?>
				  
                
	
