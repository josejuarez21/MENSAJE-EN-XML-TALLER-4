

<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</style>
<title>Trabajando con XML</title>
</head>

<body>
	<?php

if(isset($_REQUEST['ok'])){
	$xml = new DOMDocument("1.0","UTF-8");
	$xml ->load("j.xml");

	$rootTag = $xml->getElementsByTagName("document")->item(0);

	$dataTag = $xml->createElement("data");

	$nombreTag = $xml->createElement("nombre",$_REQUEST['nombre']);
	$apellidoTag = $xml->createElement("apellido",$_REQUEST['apellido']);	
	$edadTag = $xml->createElement("edad",$_REQUEST['edad']);


	$dataTag->appendChild($nombreTag);
	$dataTag->appendChild($apellidoTag);
	$dataTag->appendChild($edadTag);

	$rootTag->appendChild($dataTag);
	$xml->save("j.xml");

}
?>
<div class="container">	
<h1>Formulario</h1>
<form action="datos.php" method="post">


<input type="text" name="nombre" placeholder="Nombre" accept="text/plain" class="form-control"/><br><br>

<input type="text" name="apellido"  placeholder="Apellido" accept="text/plain" class="form-control"/><br><br>


<input type="number" name="edad" placeholder="Edad" accept="text/plain" class="form-control"/>
<br>
<input type="submit" name="ok" value="Ejecutar"/>
</form>




<hr>
<div class="respuesta"></div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>