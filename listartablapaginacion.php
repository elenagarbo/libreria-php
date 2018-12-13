<html>
<head>
<title>Mostrar los libros actualizar y eliminar</title>
</head>
<body>
<?php
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * FROM libros";
		$consulta = mysqli_query($enlace,$query);
		/* contamos el número de registros para calcular las páginas que necesitamos*/
		$num_total_registros = mysqli_num_rows($consulta);
		echo  "Número de registros: ";
		echo  $num_total_registros;
		/* En tamaño de página pondremos el número de registros que se verán por página*/
		$TAMANO_PAGINA =2;
		/*Lo primero que miraremos es si nos ha llegado una variable por el método GET.*/
		if (isset($_GET["pagina"]))
		{
			 $pagina = $_GET["pagina"];
			 $inicio = ($pagina - 1) * $TAMANO_PAGINA;
		}
		else{
			$inicio = 0;
			$pagina = 1;			
		}
//examino la página a mostrar y el inicio del registro a mostrar
//Necesitamos saber en que página empezamos
//calculo el total de páginas redondea para sacar el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
//Selecciono el total de páginas a mostrar desde la anterior vista
$query = "SELECT *  FROM libros  LIMIT ".$inicio."," . $TAMANO_PAGINA;

/*Recibe 1 ó 2 argumentos numéricos enteros positivos; el primero indica el número del primer registro a retornar, el segundo, el número máximo de registros 
*/
	if ($result = mysqli_query($enlace,$query))
		{echo'
			<table border="1" width="800px">
			<tr>
			<th>TITULO</th>
			<th>AUTOR</th>
			<th>AÑO</th>
			<th>COMENTARIO</th>			
			</tr>';
			while($fila = mysqli_fetch_array($result))
			{			
		    echo "<tr><td>".$fila['titulo']."</td>";
			echo "<td>".$fila['autor']."</td>";
			echo "<td>".$fila['anio']."</td>";
			echo "<td>".$fila['comentario']."</td>";			
			echo "</Th>";
			}
			echo'</table >';		
		}	
		
		
		
		
 $url="listartablapaginacion.php";
if ($total_paginas > 1) {
   if ($pagina != 1)	  
      echo '<a href="'.$url.'?pagina='.($pagina-1).'"><img src="images/izq.gif" border="0"></a>'; 
  
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            //si muestro el índice de la página actual, no coloco enlace
            echo $pagina;
         else
            //si el índice no corresponde con la página mostrada actualmente,
            //coloco el enlace para ir a esa página
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'"><img src="images/der.gif" border="0"></a>';
}		
?>
<br/>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html> 
