<!DOCTYPE html>
<html>
<head>
    <title>Tarea 1 - Librerias - Fabiola Mayorga</title>
</head>
    
<body>
	<h1>Tarea de librerias PHP</h1>
	<h2>Manejo de Strings</h2>
	<h3>Clase String</h3>
	<p>Funcion <strong>substr_replace()</strong></p>
	<?php
	$string = "Hola";
	echo "String original = ".$string."</br>";
	echo "String con substr_replace = ";
	echo substr_replace($string, "mas texto", 0 ,0);
	?>
	<p>Funcion <strong>substr_count()</strong></p>
	<?php
	$stringToCount = "Esto es una prueba y una muestra de como funciona substr_count";
	echo "String a probar= ". $stringToCount."<br>";
	echo "Cantidad de veces que el monosilibo 'un' es encontrado en el string = ";
	echo substr_count($stringToCount, 'un');
	?>
	<p>Funcion <strong>strstr() </strong></p>
	<?php
	$textToTrim = "Esto es una prueba del funcionamiento de la funcion strstr()<br>";
	echo $textToTrim;
	echo "Texto con strstr()  aplicado<br>";
	$trimmed = strstr($textToTrim, "prueba");
	echo $trimmed;
	?>
	<p>Funcion <strong>strpos()</strong></p>
	<?php
	echo "String a probar = ";
	$stringToPos = "Esto es una prueba<br>";
	echo $stringToPos;	
	echo "Primera aparicion de la palabra 'prueba' en el string anterior<br> ";
	echo strpos($stringToPos, "prueba");
	?>
	<h2>Manejo de fecha</h2>
	<h3>Clase Date and Time</h3>
	<p>Funcion <strong>DateTime::format() </strong></p>
	<?php
	$fecha = new DateTime('2015-02-01');
	echo $fecha->format('d-m-Y');	
	?>
	<h3>Calendario</h3>
	<p>Funcion <strong>cal_days_in_month</strong>, calcula la cantidad de dias en un mes especifico</p>
	<?php
	$cantidadMesesAbril = cal_days_in_month(CAL_GREGORIAN, 4, 2015);
	echo "Cantidad de dias en el mes de abril, 2015 ".$cantidadMesesAbril;
	?>
	<h2>Procesamiento y generacion de imagenes</h2>
	<h3>Funcion getimagesize()</h3>
	<?php
	$filename="labrador_retriever.jpg";
	?>
	<img src="labrador_retriever.jpg"><br>
	<?php
	$size = getimagesize($filename);
	echo "Atributos de la imagen <br>";
	foreach ($size as $valor) {
		echo $valor."<br>";
	}
	echo  "Cantidad de atributos " . count($size);
	?>
	<h2>Extenciones criptograficas</h2>
	<h3>Funcion hash()</h3>		
	<form method="get">
		<label>Ingrese una palabra para encriptar</label>
		<input name="palabra" type="text"/>
		<button>Encriptar</button>
	</form>
	<?php
		$palabra = $_GET['palabra'];

		echo "Palabra encriptada " . hash("md5", $palabra);

	?>

</body>   
</html>