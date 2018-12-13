
<html>
<head>
<title>Mostrar los libros</title>
</head>
<body>
<?php

include('includes/conexion.php');
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * from libros ";
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
		    echo "<tr>
			<td>".$fila['titulo']."</td>";
			echo "<td>".$fila['autor']."</td>";
			echo "<td>".$fila['anio']."</td>";
			echo "<td>".$fila['comentario']."</td>";			
			echo "</tr>";
						
			}
			echo'</table >';		
		}		
?>
<br/><a href="index.php">Volver al Indice2</a> <br/>
<form action="#" method="post">
<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel</button>
</form>
<?php
if(isset($_POST["export_data"])) {
$filename = "sergio.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$filename."");
$show_coloumn = false;
if(!empty($developer_records)) {
foreach($developer_records as $record) {
if(!$show_coloumn) {
// display field/column names in first row
echo implode("t", array_keys($record)) . "n";
$show_coloumn = true;
}
echo implode("t", array_values($record)) . "n";
}
}
exit;
}
?>

</body>
</html> 
