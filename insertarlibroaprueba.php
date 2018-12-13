<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="es-es">
<title>contenteditable dc</title>
<style>
#textBox {
  width: 800px;
  height: 300px;
  border: 2px #000000 solid;
  padding: 10px;
  overflow: scroll;
  background-color: ;
}

    strong {
        color: red;
    }
</style>

    <script src="http://code.jquery.com/jquery-latest.js"></script>

<script>

   
    function saveDataHTML() {
        var sData = document.getElementById("textBox").innerHTML;

        // window.sessionStorage.sDataHTML = sData;
        sessionStorage.setItem("sDataHTML", sData);
        alert("saveDataHTML()");
    }

    

</script>

</head>

<body>
<menu>

  <button onclick="document.execCommand('bold',false,'');">Negrilla</button>
  <button onclick="document.execCommand('italic',false,'');">Itálica</button>
  <button onclick="document.execCommand('underline',false,'');">Subrayado</button>  
  <button onclick="document.execCommand('foreColor',false,'green');">colo</button>  </button>
</menu>

<section id="textBox" contenteditable="true">
<h1 style="color:red">Título</h1>
<p>Escribir aquí...</p> 
</section>
<p><input type="checkbox" name="setEditable" id="setEditable" onchange="document.execCommand('contentreadonly', false, this.checked);">Sólo lectura</p>
<p><input type="checkbox" name="setHTML" id="setHTML" onchange="permutar(this.checked)">Ver HTML</p>

</body>
</html>



<!--<html>
<head>
<title>Insertar Libros</title>
</head>
<body>
<h1>Alta Nuevos libros</h1>
<form action="insertarlibrob.php" method="post">
Ingrese Titulo del Libro:<br/>
<input type="text" name="titulo"><br/>
Ingrese Autor del Libro:<br/>
<input type="text" name="autor"><br/>
Insertar año de edición<br/>
<input type="text" name="anio"><br/>
Insertar Comentario<br/>
<textarea name="comentario"></textarea><br/>
<input type="submit" value="Registrar">
</form>
<a href="index.php">Volver al Indice</a> <br/>
</body>
</html>
-->
