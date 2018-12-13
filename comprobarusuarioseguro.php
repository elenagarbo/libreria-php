<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
header("Content-Type: text/html;charset=utf-8");
include('includes/conexion.php');
		$acentos = $enlace->query("SET NAMES 'utf8'");
		
		$user = mysqli_real_escape_string($enlace, $_POST['usuario']);
		/*
		'or '1'='1
		*/		
		
		$password = mysqli_real_escape_string($enlace, $_POST['password']);
		$query = "SELECT  usuario,password
                       FROM usuario WHERE usuario='$user'
					   AND password='$password'";
		$resultado=	mysqli_query($enlace,$query) ;  
		$filas=mysqli_num_rows($resultado);
		if($filas>0)	
		{echo "Bienvenido a la página<br/>" ;
		echo "Como es correcto aqui le podriamos llevar a otra página o mostrar algo";				
		}
		else
{  		 echo "El usuario o contraseña incorrectsos .";
		 echo '<a href="crearusuario.php">Crear nuevo usuario  en la web</a><br/>';
		 echo '<a href="ingresarusuario.php">Volver a intentarlo</a>';
}		
?>
</body>
</html>
