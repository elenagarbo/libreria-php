<?php
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');
require_once 'conexion.php';
function search()
{
  include('conexion.php');
  $acentos = $enlace->query("SET NAMES 'utf8'");
  $search = $_POST['search'];
  $query = "SELECT * FROM libros WHERE titulo LIKE '%$search%' ";
 if ($result = mysqli_query($enlace,$query)){		
			while($fila = mysqli_fetch_array($result))
			{						
		    echo "TITULO:".$fila['titulo']."<br/>";
			echo "AUTOR:".$fila['autor']."<br/>";
			echo "AÑO:".$fila['anio']."<br/>";
			echo "AUTOR:".$fila['comentario']."<br/>";					
			echo "<hr/>";
			}
		}
}
search();
	?>	
		