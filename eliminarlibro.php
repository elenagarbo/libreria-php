<?php 
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');  
 $acentos = $enlace->query("SET NAMES 'utf8'"); 
			$query = "SELECT id FROM libros
                       WHERE id='$_GET[id]'";	   
				   
					   
	if (mysqli_query($enlace,$query)){                   
				   $query = "DELETE FROM libros WHERE id='$_GET[id]'";
				   if (mysqli_query($enlace,$query)){
					   ?>
						<script type="text/javascript">
						window.location="index.php";
						</script>
						<?php 
				   }
				   else{					   
					   echo "no existe el lbri";
					   }	 
                }
						?>
