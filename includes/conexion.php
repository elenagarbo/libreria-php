<!--
Conexión localhost
-->
<?php/*
    $host_name  = "mysql.hostinger.es";
    $database   = "u973190700_libre";
    $user_name  = "u973190700_ulibr";
    $password   = "libreria";
    $enlace = mysqli_connect($host_name, $user_name, $password, $database);    
    if(mysqli_connect_errno())
    {  echo 'Error al conectar con la base de datos: '.mysqli_connect_error();
    }else{echo '';}*/
?>
<?php
    $host_name  = "localhost";
    $user_name  = "root";
    $password   = "";   
	$database   = "libreria2";	
	
    $enlace = mysqli_connect($host_name, $user_name, $password, $database); 

    if(mysqli_connect_errno())
    {  echo 'Error al conectar con la base de datos: '.mysqli_connect_error();
    }
	else{echo '';}
?>





